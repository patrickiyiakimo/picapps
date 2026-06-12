<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Project;
use App\Models\Activity;
use App\Models\UserFinance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // Remove the __construct method completely - use route middleware instead
    
    public function index()
    {
        $user = Auth::user();
        
        // Get or create user finance record
        $finance = UserFinance::firstOrCreate(
            ['user_id' => $user->id],
            [
                'total_spent' => 0,
                'outstanding_balance' => 0,
                'default_currency' => 'USD',
                'payment_methods' => json_encode([]),
                'bank_accounts' => json_encode([])
            ]
        );

        // Get projects
        $projects = Project::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        // Get invoices
        $invoices = Invoice::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        // Get recent activities
        $activities = Activity::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Calculate statistics
        $stats = [
            'active_projects' => Project::where('user_id', $user->id)
                ->where('status', 'active')
                ->count(),
            'total_spent' => $finance->total_spent,
            'hours_logged' => 0,
            'support_tickets' => 0,
        ];

        // Ensure finance is never null
        if (!$finance) {
            $finance = (object)[
                'default_currency' => 'USD', 
                'outstanding_balance' => 0,
                'total_spent' => 0
            ];
        }

        return view('dashboard', compact('user', 'finance', 'projects', 'invoices', 'activities', 'stats'));
    }

    // Admin: Update user finance
    public function updateFinance(Request $request, User $user)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        $request->validate([
            'total_spent' => 'required|numeric|min:0',
            'outstanding_balance' => 'required|numeric|min:0',
            'default_currency' => 'required|string|in:USD,GBP,EUR,NGN,USDC',
        ]);

        $finance = UserFinance::updateOrCreate(
            ['user_id' => $user->id],
            $request->only(['total_spent', 'outstanding_balance', 'default_currency'])
        );

        // Log activity
        Activity::create([
            'user_id' => $user->id,
            'type' => 'finance_updated',
            'description' => 'Your financial details have been updated by admin',
            'metadata' => json_encode($request->all())
        ]);

        return redirect()->back()->with('success', 'User finance updated successfully');
    }

    // Create invoice
    public function createInvoice(Request $request, User $user)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        $request->validate([
            'amount' => 'required|numeric|min:0',
            'currency' => 'required|string|in:USD,GBP,EUR,NGN,USDC',
            'description' => 'required|string',
            'due_days' => 'required|integer|min:1',
        ]);

        $invoiceNumber = 'INV-' . str_pad(Invoice::count() + 1, 6, '0', STR_PAD_LEFT);

        $invoice = Invoice::create([
            'invoice_number' => $invoiceNumber,
            'user_id' => $user->id,
            'amount' => $request->amount,
            'currency' => $request->currency,
            'status' => 'pending',
            'issue_date' => now(),
            'due_date' => now()->addDays($request->due_days),
            'description' => $request->description,
            'line_items' => json_encode($request->line_items ?? [])
        ]);

        // Update user finance
        $finance = UserFinance::firstWhere('user_id', $user->id);
        if ($finance) {
            $finance->update([
                'outstanding_balance' => $finance->outstanding_balance + $request->amount
            ]);
        }

        // Log activity
        Activity::create([
            'user_id' => $user->id,
            'type' => 'invoice_created',
            'description' => "New invoice #{$invoiceNumber} has been created",
            'metadata' => json_encode(['invoice_id' => $invoice->id, 'amount' => $request->amount])
        ]);

        return redirect()->back()->with('success', "Invoice {$invoiceNumber} created successfully");
    }

    // Mark invoice as paid
    public function markInvoicePaid(Invoice $invoice)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        $invoice->update([
            'status' => 'paid',
            'paid_date' => now()
        ]);

        // Update user finance
        $finance = UserFinance::firstWhere('user_id', $invoice->user_id);
        if ($finance) {
            $finance->update([
                'total_spent' => $finance->total_spent + $invoice->amount,
                'outstanding_balance' => max(0, $finance->outstanding_balance - $invoice->amount)
            ]);
        }

        // Log activity
        Activity::create([
            'user_id' => $invoice->user_id,
            'type' => 'invoice_paid',
            'description' => "Invoice #{$invoice->invoice_number} has been paid",
            'metadata' => json_encode(['invoice_id' => $invoice->id])
        ]);

        return redirect()->back()->with('success', 'Invoice marked as paid');
    }

    // Download invoice as PDF
    public function downloadInvoice(Invoice $invoice)
    {
        if ($invoice->user_id !== Auth::id() && Auth::user()->role !== 'admin') {
            abort(403);
        }

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('invoices.pdf', compact('invoice'));
        return $pdf->download("invoice-{$invoice->invoice_number}.pdf");
    }

    // Print invoice
    public function printInvoice(Invoice $invoice)
    {
        if ($invoice->user_id !== Auth::id() && Auth::user()->role !== 'admin') {
            abort(403);
        }

        return view('invoices.print', compact('invoice'));
    }

    // Create project
    public function createProject(Request $request, User $user)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'progress' => 'integer|min:0|max:100',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after:start_date',
        ]);

        $project = Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $user->id,
            'status' => 'active',
            'progress' => $request->progress ?? 0,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        Activity::create([
            'user_id' => $user->id,
            'type' => 'project_created',
            'description' => "New project '{$project->name}' has been created",
            'metadata' => json_encode(['project_id' => $project->id])
        ]);

        return redirect()->back()->with('success', 'Project created successfully');
    }

    // Update project progress
    public function updateProjectProgress(Request $request, Project $project)
    {
        if ($project->user_id !== Auth::id() && Auth::user()->role !== 'admin') {
            abort(403);
        }

        $request->validate([
            'progress' => 'required|integer|min:0|max:100',
        ]);

        $project->update(['progress' => $request->progress]);

        if ($request->progress >= 100) {
            $project->update(['status' => 'completed']);
        }

        Activity::create([
            'user_id' => $project->user_id,
            'type' => 'project_updated',
            'description' => "Project '{$project->name}' progress updated to {$request->progress}%",
            'metadata' => json_encode(['project_id' => $project->id, 'progress' => $request->progress])
        ]);

        return redirect()->back()->with('success', 'Project progress updated');
    }
}