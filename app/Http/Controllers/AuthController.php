<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserFinance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Show login page
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // Show signup page
    public function showSignup()
    {
        return view('auth.signup');
    }

    // Handle signup request
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'terms' => 'accepted',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'client',
        ]);

        // Create finance record for new user
        UserFinance::create([
            'user_id' => $user->id,
            'total_spent' => 0,
            'outstanding_balance' => 0,
            'default_currency' => 'USD',
            'payment_methods' => json_encode([]),
            'bank_accounts' => json_encode([]),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    // Show dashboard - THIS NEEDS TO BE FIXED
    public function dashboard()
    {
        // Call the DashboardController's index method
        return app(DashboardController::class)->index();
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}