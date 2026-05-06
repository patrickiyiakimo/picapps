<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Alta Digital Agency</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Chart.js for Analytics -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen">
        
        <!-- Premium Navbar -->
        <nav class="bg-white shadow-md border-b border-gray-100 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <!-- Logo -->
                    <a href="/" class="flex items-center space-x-2 group">
                        <img src="{{ asset('/images/alta-logo.png') }}" alt="Alta" class="h-8 w-auto">
                        <span class="text-xl font-bold text-navy-900">Alta</span>
                    </a>
                    
                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-6">
                        <a href="#" class="text-emerald-600 border-b-2 border-emerald-600 pb-1 text-sm font-medium">Dashboard</a>
                        <a href="#" class="text-gray-600 hover:text-emerald-600 transition text-sm font-medium">Projects</a>
                        <a href="#" class="text-gray-600 hover:text-emerald-600 transition text-sm font-medium">Invoices</a>
                        <a href="#" class="text-gray-600 hover:text-emerald-600 transition text-sm font-medium">Support</a>
                        <a href="#" class="text-gray-600 hover:text-emerald-600 transition text-sm font-medium">Settings</a>
                    </div>
                    
                    <!-- User Menu -->
                    <div class="flex items-center gap-4">
                        <!-- Notifications -->
                        <button class="relative text-gray-500 hover:text-emerald-600 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>
                        
                        <!-- User Dropdown -->
                        <div class="relative group">
                            <button class="flex items-center gap-3 text-gray-700 hover:text-emerald-600 transition">
                                <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <span class="text-sm font-medium hidden md:inline">{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="absolute right-0 w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100 z-50">
                                <div class="py-2">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Profile Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Billing</a>
                                    <hr class="my-1">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Dashboard Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            
            <!-- Welcome Banner -->
            <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 rounded-lg p-6 mb-8 text-white">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold">Welcome back, {{ Auth::user()->name }}! 👋</h1>
                        <p class="text-emerald-100 mt-1">Here's what's happening with your projects today.</p>
                    </div>
                    <div class="hidden md:block">
                        <svg class="w-20 h-20 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg p-6 border border-gray-100 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Active Projects</p>
                            <p class="text-3xl font-bold text-navy-900 mt-1">3</p>
                            <p class="text-xs text-green-600 mt-1">↑ 2 from last month</p>
                        </div>
                        <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6 border border-gray-100 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Total Spent</p>
                            <p class="text-3xl font-bold text-navy-900 mt-1">$12,450</p>
                            <p class="text-xs text-gray-500 mt-1">Lifetime value</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6 border border-gray-100 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Hours Logged</p>
                            <p class="text-3xl font-bold text-navy-900 mt-1">247</p>
                            <p class="text-xs text-green-600 mt-1">This month</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6 border border-gray-100 shadow-sm hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Support Tickets</p>
                            <p class="text-3xl font-bold text-navy-900 mt-1">2</p>
                            <p class="text-xs text-green-600 mt-1">Avg response: 2hrs</p>
                        </div>
                        <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636L16 8m0 0l-2.364-2.364M16 8V4m-8 4H4m4 0h4M4 12h16M4 16h4m0 0l-2.364 2.364M8 16v4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Projects and Analytics Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                
                <!-- Active Projects -->
                <div class="lg:col-span-2 bg-white rounded-lg border border-gray-100 shadow-sm">
                    <div class="p-6 border-b border-gray-100">
                        <div class="flex justify-between items-center">
                            <h2 class="text-lg font-bold text-navy-900">Active Projects</h2>
                            <a href="#" class="text-sm text-emerald-600 hover:text-emerald-700">View All →</a>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-100">
                        <!-- Project 1 -->
                        <div class="p-6 hover:bg-gray-50 transition">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-navy-900">E-commerce Website Development</h3>
                                <span class="text-xs bg-yellow-100 text-yellow-700 px-2 py-1">In Progress</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-3">Launching a fully functional online store with payment gateway integration.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex-1 mr-4">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span>65%</span>
                                    </div>
                                    <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-emerald-600 rounded-full" style="width: 65%"></div>
                                    </div>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 rounded-full bg-emerald-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-emerald-200 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-emerald-300 border-2 border-white"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project 2 -->
                        <div class="p-6 hover:bg-gray-50 transition">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-navy-900">Mobile App - iOS & Android</h3>
                                <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1">Design Phase</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-3">Cross-platform fitness tracking app with real-time analytics.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex-1 mr-4">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span>30%</span>
                                    </div>
                                    <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-emerald-600 rounded-full" style="width: 30%"></div>
                                    </div>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 rounded-full bg-emerald-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-emerald-200 border-2 border-white"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project 3 -->
                        <div class="p-6 hover:bg-gray-50 transition">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-navy-900">Corporate Website Redesign</h3>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1">Review</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-3">Complete brand refresh with modern UI/UX design.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex-1 mr-4">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span>85%</span>
                                    </div>
                                    <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-emerald-600 rounded-full" style="width: 85%"></div>
                                    </div>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 rounded-full bg-emerald-100 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-emerald-200 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-emerald-300 border-2 border-white"></div>
                                    <div class="w-6 h-6 rounded-full bg-emerald-400 border-2 border-white"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity & Quick Actions -->
                <div class="space-y-6">
                    <!-- Quick Actions -->
                    <div class="bg-white rounded-lg border border-gray-100 shadow-sm p-6">
                        <h2 class="text-lg font-bold text-navy-900 mb-4">Quick Actions</h2>
                        <div class="space-y-3">
                            <button class="w-full flex items-center justify-between p-3 bg-gray-50 hover:bg-emerald-50 transition rounded-lg">
                                <span class="text-sm font-medium text-gray-700">Create New Project</span>
                                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </button>
                            <button class="w-full flex items-center justify-between p-3 bg-gray-50 hover:bg-emerald-50 transition rounded-lg">
                                <span class="text-sm font-medium text-gray-700">Submit Support Ticket</span>
                                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </button>
                            <button class="w-full flex items-center justify-between p-3 bg-gray-50 hover:bg-emerald-50 transition rounded-lg">
                                <span class="text-sm font-medium text-gray-700">Request a Quote</span>
                                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Recent Invoices -->
                    <div class="bg-white rounded-lg border border-gray-100 shadow-sm p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-bold text-navy-900">Recent Invoices</h2>
                            <a href="#" class="text-sm text-emerald-600 hover:text-emerald-700">View All</a>
                        </div>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center p-3 border-b border-gray-100">
                                <div>
                                    <p class="text-sm font-medium text-navy-900">INV-001</p>
                                    <p class="text-xs text-gray-500">Feb 25, 2024</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-navy-900">$3,500</p>
                                    <span class="text-xs bg-green-100 text-green-700 px-2 py-0.5">Paid</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center p-3 border-b border-gray-100">
                                <div>
                                    <p class="text-sm font-medium text-navy-900">INV-002</p>
                                    <p class="text-xs text-gray-500">Mar 1, 2024</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-navy-900">$5,000</p>
                                    <span class="text-xs bg-yellow-100 text-yellow-700 px-2 py-0.5">Pending</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center p-3">
                                <div>
                                    <p class="text-sm font-medium text-navy-900">INV-003</p>
                                    <p class="text-xs text-gray-500">Mar 15, 2024</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-navy-900">$2,500</p>
                                    <span class="text-xs bg-green-100 text-green-700 px-2 py-0.5">Paid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Feed -->
            <div class="bg-white rounded-lg border border-gray-100 shadow-sm mb-8">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-navy-900">Recent Activity</h2>
                </div>
                <div class="divide-y divide-gray-100">
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-700">Project <span class="font-semibold">"E-commerce Website"</span> has been updated</p>
                            <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                        </div>
                        <span class="text-xs text-emerald-600">View →</span>
                    </div>
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-700">New message from support team</p>
                            <p class="text-xs text-gray-400 mt-1">Yesterday</p>
                        </div>
                        <span class="text-xs text-emerald-600">Read →</span>
                    </div>
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-700">Invoice <span class="font-semibold">#INV-002</span> has been paid</p>
                            <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                        </div>
                        <span class="text-xs text-emerald-600">View →</span>
                    </div>
                </div>
            </div>

            <!-- Support Section -->
            <div class="bg-gradient-to-r from-gray-50 to-white rounded-lg border border-gray-200 p-6 text-center">
                <svg class="w-12 h-12 text-emerald-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636L16 8m0 0l-2.364-2.364M16 8V4m-8 4H4m4 0h4M4 12h16M4 16h4m0 0l-2.364 2.364M8 16v4"></path>
                </svg>
                <h3 class="text-lg font-semibold text-navy-900 mb-2">Need Help?</h3>
                <p class="text-gray-600 text-sm mb-4">Our support team is available 24/7 to assist you.</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="#" class="inline-flex items-center justify-center gap-2 bg-emerald-600 text-white px-6 py-2 text-sm font-semibold hover:bg-emerald-500 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Contact Support
                    </a>
                    <a href="#" class="inline-flex items-center justify-center gap-2 border border-gray-300 text-gray-700 px-6 py-2 text-sm font-semibold hover:border-emerald-500 hover:text-emerald-600 transition bg-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Knowledge Base
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>