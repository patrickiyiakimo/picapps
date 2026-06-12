<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Project;
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
        
        return view('admin.dashboard', compact('users', 'totalUsers', 'totalRevenue', 'activeProjects'));
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
}