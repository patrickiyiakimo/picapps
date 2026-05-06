<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Routes (No authentication required)
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::view('/about/team', 'about.team')->name('about.team');
Route::view('/about/careers', 'about.careers')->name('about.careers');
Route::view('/about/partners', 'about.partners')->name('about.partners');

Route::view('/resources', 'resources')->name('resources');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Auth Routes (Guest only - redirect to dashboard if already logged in)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup']);
});

// Logout Route (Authenticated only)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Protected Routes (Authentication required)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    
    // Add more protected routes here as needed
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    // Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    // Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');
});