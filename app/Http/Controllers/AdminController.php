<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Project;
use App\Models\Payment;
use App\Models\Activity;
use App\Models\UserFinance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // REMOVE the __construct method completely - don't use middleware() here
    
    public function index()
    {
        // Check if user is admin
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Unauthorized access.');
        }
        
        $users = User::with(['finances', 'projects', 'invoices'])->get();
        $totalUsers = User::count();
        $totalRevenue = UserFinance::sum('total_spent');
        $activeProjects = Project::where('status', 'active')->count();
        $pendingRequests = Project::where('status', 'pending')->count();
        $recentRequests = Project::where('status', 'pending')
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        
        return view('admin.dashboard', compact('users', 'totalUsers', 'totalRevenue', 'activeProjects', 'pendingRequests', 'recentRequests'));
    }

    public function manageUsers()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $users = User::with(['finances'])->paginate(10);
        return view('admin.users', compact('users'));
    }

    public function editUser(User $user)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        return view('admin.users-edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,client',
        ]);

        $user->update($request->only(['name', 'email', 'role']));

        return redirect()->route('admin.users')->with('success', 'User updated successfully');
    }

    public function allInvoices()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $invoices = Invoice::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.invoices', compact('invoices'));
    }

    public function allProjects()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $projects = Project::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.projects', compact('projects'));
    }
    
    public function pendingRequests()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $pendingRequests = Project::where('status', 'pending')
            ->with('user')
            ->orderBy('created_at', 'asc')
            ->paginate(20);
        
        return view('admin.pending-requests', compact('pendingRequests'));
    }
    
    public function approveProject(Request $request, Project $project)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $request->validate([
            'admin_notes' => 'nullable|string',
            'start_date' => 'nullable|date',
        ]);
        
        $project->update([
            'status' => 'active',
            'admin_notes' => $request->admin_notes,
            'start_date' => $request->start_date ?? now(),
            'approved_at' => now(),
            'progress' => 0
        ]);
        
        // Create activity for user
        Activity::create([
            'user_id' => $project->user_id,
            'type' => 'project_approved',
            'description' => "Your project '{$project->name}' has been approved! We'll begin work shortly.",
            'metadata' => json_encode(['project_id' => $project->id])
        ]);
        
        return redirect()->back()->with('success', 'Project approved successfully');
    }
    
    public function rejectProject(Request $request, Project $project)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $request->validate([
            'rejection_reason' => 'required|string'
        ]);
        
        $project->update([
            'status' => 'rejected',
            'admin_notes' => $request->rejection_reason,
            'rejected_at' => now()
        ]);
        
        // Create activity for user
        Activity::create([
            'user_id' => $project->user_id,
            'type' => 'project_rejected',
            'description' => "Your project '{$project->name}' was not approved. Reason: {$request->rejection_reason}",
            'metadata' => json_encode(['project_id' => $project->id])
        ]);
        
        return redirect()->back()->with('warning', 'Project rejected');
    }
    
    public function projectDetails(Project $project)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $project->load('user', 'invoices');
        return view('admin.project-details', compact('project'));
    }
    
    public function addProjectUpdate(Request $request, Project $project)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $request->validate([
            'message' => 'required|string',
            'progress' => 'nullable|integer|min:0|max:100'
        ]);
        
        $updates = json_decode($project->updates ?? '[]', true);
        $updates[] = [
            'message' => $request->message,
            'date' => now()->toISOString(),
            'author' => Auth::user()->name
        ];
        
        $project->update([
            'updates' => json_encode($updates),
            'progress' => $request->progress ?? $project->progress
        ]);
        
        // Create activity for user
        Activity::create([
            'user_id' => $project->user_id,
            'type' => 'project_updated',
            'description' => $request->message,
            'metadata' => json_encode(['project_id' => $project->id, 'progress' => $request->progress])
        ]);
        
        return redirect()->back()->with('success', 'Project update added');
    }

    public function allPayments()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $payments = Payment::with('user')->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.payments', compact('payments'));
    }

    public function confirmPayment(Payment $payment)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        
        $payment->update([
            'status' => 'confirmed',
            'paid_at' => now()
        ]);
        
        // Update user finance
        $finance = UserFinance::firstWhere('user_id', $payment->user_id);
        if ($finance) {
            $finance->update([
                'total_spent' => $finance->total_spent + $payment->amount,
                'outstanding_balance' => max(0, $finance->outstanding_balance - $payment->amount)
            ]);
        }
        
        return redirect()->back()->with('success', 'Payment confirmed successfully');
    }
}