<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =============================================
// PUBLIC ROUTES (No authentication required)
// =============================================

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
Route::view('/blog', 'blog')->name('blog');
Route::view('/case-studies', 'case-studies')->name('case-studies');
Route::view('/webinars', 'webinars')->name('webinars');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/websites', 'websites')->name('websites');

Route::view('/services/ecommerce', 'services.ecommerce')->name('services.ecommerce');
Route::view('/services/corporate', 'services.corporate')->name('services.corporate');
Route::view('/services/custom-web', 'services.custom-web')->name('services.custom-web');
Route::view('/services/cms', 'services.cms')->name('services.cms');
Route::view('/mobile/ios', 'mobile.ios')->name('mobile.ios');
Route::view('/mobile/android', 'mobile.android')->name('mobile.android');
Route::view('/services/cross-platform', 'services.cross-platform')->name('services.cross-platform');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// =============================================
// AUTH ROUTES (Guest only)
// =============================================

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup']);
});

// =============================================
// LOGOUT ROUTE (Authenticated only)
// =============================================

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// =============================================
// PROTECTED ROUTES (Authentication required)
// =============================================

Route::middleware('auth')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Project Routes
    Route::post('/projects/create', [DashboardController::class, 'createProject'])->name('projects.create');
    Route::post('/projects/request', [DashboardController::class, 'requestProject'])->name('projects.request');
    Route::post('/projects/{project}/cancel', [DashboardController::class, 'cancelProject'])->name('projects.cancel');
    Route::patch('/projects/{project}/progress', [DashboardController::class, 'updateProjectProgress'])->name('projects.progress');
    
    // Invoice Routes
    Route::get('/invoices/{invoice}/download', [DashboardController::class, 'downloadInvoice'])->name('invoices.download');
    Route::get('/invoices/{invoice}/print', [DashboardController::class, 'printInvoice'])->name('invoices.print');
    Route::get('/invoices/{invoice}/pdf', [DashboardController::class, 'generateInvoicePDF'])->name('invoices.pdf');
    
    // Meeting Routes
    Route::post('/schedule-meeting', [DashboardController::class, 'scheduleMeeting'])->name('schedule.meeting');
    Route::get('/meeting-link', [DashboardController::class, 'getMeetingLink'])->name('meeting.link');
    Route::post('/meeting/{meeting}/reschedule', [DashboardController::class, 'rescheduleMeeting'])->name('meeting.reschedule');
    Route::delete('/meeting/{meeting}/cancel', [DashboardController::class, 'cancelMeeting'])->name('meeting.cancel');
    
    // Payment Routes
    Route::post('/payment/notify', [DashboardController::class, 'notifyPayment'])->name('payment.notify');
    
    // =============================================
    // ADMIN ROUTES (No middleware - controller handles role check)
    // =============================================
    
    // User Management
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::get('/admin/users/{user}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    
    // Invoice Management
    Route::get('/admin/invoices', [AdminController::class, 'allInvoices'])->name('admin.invoices');
    
    // Project Management
    Route::get('/admin/projects', [AdminController::class, 'allProjects'])->name('admin.projects');
    Route::get('/admin/projects/{project}', [AdminController::class, 'projectDetails'])->name('admin.projects.details');
    Route::post('/admin/projects/{project}/update', [AdminController::class, 'addProjectUpdate'])->name('admin.projects.update');
    
    // Pending Requests - APPROVE & REJECT ROUTES
    Route::get('/admin/pending-requests', [AdminController::class, 'pendingRequests'])->name('admin.pending-requests');
    Route::post('/admin/projects/{project}/approve', [AdminController::class, 'approveProject'])->name('admin.projects.approve');
    Route::post('/admin/projects/{project}/reject', [AdminController::class, 'rejectProject'])->name('admin.projects.reject');
    
    // Payment Management
    Route::get('/admin/payments', [AdminController::class, 'allPayments'])->name('admin.payments');
    Route::post('/admin/payments/{payment}/confirm', [AdminController::class, 'confirmPayment'])->name('admin.payments.confirm');
    
    // Finance Management (Admin actions)
    Route::post('/admin/users/{user}/finance', [DashboardController::class, 'updateFinance'])->name('admin.users.finance');
    Route::post('/admin/users/{user}/invoice', [DashboardController::class, 'createInvoice'])->name('admin.users.invoice');
    Route::patch('/admin/invoices/{invoice}/paid', [DashboardController::class, 'markInvoicePaid'])->name('admin.invoices.paid');
    
    // Admin Dashboard (must be last to avoid conflicts)
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});