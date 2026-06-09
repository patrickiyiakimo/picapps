<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard · ALTA Digital Agency</title>

    <!-- Professional Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300..700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Sharp, professional styling */
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        .font-display {
            font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
        }
        a, button, div, input, select, textarea, .rounded-lg, .rounded-xl, .rounded-2xl {
            border-radius: 0 !important;
        }
        .card-hover {
            transition: all 0.25s ease;
        }
        .card-hover:hover {
            transform: translateY(-2px);
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
</head>
<body class="bg-gray-50">

    <div class="min-h-screen">
        <!-- Premium Navbar -->
        <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div class="flex justify-between h-16 items-center">

                    <!-- Logo -->
                    <a href="/" class="flex items-center gap-2 group">
                        <span class="text-2xl font-bold text-black font-display tracking-tight">ALTA</span>
                    </a>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center gap-8">
                        <a href="#" class="text-black border-b-2 border-black pb-1 text-sm font-semibold">Dashboard</a>
                        <a href="#" class="text-gray-500 hover:text-black transition text-sm font-medium">Projects</a>
                        <a href="#" class="text-gray-500 hover:text-black transition text-sm font-medium">Invoices</a>
                        <a href="#" class="text-gray-500 hover:text-black transition text-sm font-medium">Support</a>
                        <a href="#" class="text-gray-500 hover:text-black transition text-sm font-medium">Settings</a>
                    </div>

                    <!-- User Menu -->
                    <div class="flex items-center gap-5">
                        <!-- Notifications -->
                        <button class="relative text-gray-500 hover:text-black transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                        </button>

                        <!-- User Dropdown -->
                        <div class="relative group">
                            <button class="flex items-center gap-3 text-gray-700 hover:text-black transition">
                                <div class="w-8 h-8 bg-black text-white flex items-center justify-center text-sm font-semibold">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <span class="text-sm font-medium hidden md:inline">{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="absolute right-0 w-48 bg-white shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                <div class="py-2">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Billing</a>
                                    <hr class="my-1 border-gray-100">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Dashboard Content -->
        <div class="max-w-7xl mx-auto px-5 lg:px-8 py-8">

            <!-- Welcome Banner -->
            <div class="bg-black p-6 mb-8 text-white">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div>
                        <h1 class="text-2xl font-bold font-display tracking-tight">Welcome back, {{ Auth::user()->name }}.</h1>
                        <p class="text-gray-400 text-sm mt-1">Here's an overview of your projects and activity.</p>
                    </div>
                    <div class="hidden md:block">
                        <svg class="w-16 h-16 text-white/10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white border border-gray-200 p-6 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">Active Projects</p>
                            <p class="text-3xl font-bold text-black mt-1 font-display">3</p>
                            <p class="text-xs text-gray-500 mt-1">↑ 2 from last month</p>
                        </div>
                        <div class="w-10 h-10 bg-gray-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 p-6 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">Total Spent</p>
                            <p class="text-3xl font-bold text-black mt-1 font-display">$12,450</p>
                            <p class="text-xs text-gray-500 mt-1">Lifetime value</p>
                        </div>
                        <div class="w-10 h-10 bg-gray-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 p-6 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">Hours Logged</p>
                            <p class="text-3xl font-bold text-black mt-1 font-display">247</p>
                            <p class="text-xs text-gray-500 mt-1">This month</p>
                        </div>
                        <div class="w-10 h-10 bg-gray-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 p-6 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">Support Tickets</p>
                            <p class="text-3xl font-bold text-black mt-1 font-display">2</p>
                            <p class="text-xs text-gray-500 mt-1">Avg response: 2hrs</p>
                        </div>
                        <div class="w-10 h-10 bg-gray-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M18.364 5.636L16 8m0 0l-2.364-2.364M16 8V4m-8 4H4m4 0h4M4 12h16M4 16h4m0 0l-2.364 2.364M8 16v4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Projects and Analytics Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">

                <!-- Active Projects -->
                <div class="lg:col-span-2 bg-white border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <h2 class="text-base font-bold text-black uppercase tracking-wide font-display">Active Projects</h2>
                            <a href="#" class="text-xs font-semibold text-gray-500 hover:text-black transition">VIEW ALL →</a>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-100">
                        <!-- Project 1 -->
                        <div class="p-6 hover:bg-gray-50 transition">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="font-bold text-black">E-commerce Website Development</h3>
                                <span class="text-xs bg-gray-100 text-gray-700 px-2 py-0.5 font-medium">In Progress</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-4">Launching a fully functional online store with payment gateway integration.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex-1 mr-4">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span>65%</span>
                                    </div>
                                    <div class="w-full h-1.5 bg-gray-100 overflow-hidden">
                                        <div class="h-full bg-black" style="width: 65%"></div>
                                    </div>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 bg-gray-200 border-2 border-white"></div>
                                    <div class="w-6 h-6 bg-gray-300 border-2 border-white"></div>
                                    <div class="w-6 h-6 bg-gray-400 border-2 border-white"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 2 -->
                        <div class="p-6 hover:bg-gray-50 transition">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="font-bold text-black">Mobile App - iOS & Android</h3>
                                <span class="text-xs bg-gray-100 text-gray-700 px-2 py-0.5 font-medium">Design Phase</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-4">Cross-platform fitness tracking app with real-time analytics.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex-1 mr-4">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span>30%</span>
                                    </div>
                                    <div class="w-full h-1.5 bg-gray-100 overflow-hidden">
                                        <div class="h-full bg-black" style="width: 30%"></div>
                                    </div>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 bg-gray-200 border-2 border-white"></div>
                                    <div class="w-6 h-6 bg-gray-300 border-2 border-white"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 3 -->
                        <div class="p-6 hover:bg-gray-50 transition">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="font-bold text-black">Corporate Website Redesign</h3>
                                <span class="text-xs bg-gray-100 text-gray-700 px-2 py-0.5 font-medium">Review</span>
                            </div>
                            <p class="text-sm text-gray-500 mb-4">Complete brand refresh with modern UI/UX design.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex-1 mr-4">
                                    <div class="flex justify-between text-xs text-gray-500 mb-1">
                                        <span>Progress</span>
                                        <span>85%</span>
                                    </div>
                                    <div class="w-full h-1.5 bg-gray-100 overflow-hidden">
                                        <div class="h-full bg-black" style="width: 85%"></div>
                                    </div>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 bg-gray-200 border-2 border-white"></div>
                                    <div class="w-6 h-6 bg-gray-300 border-2 border-white"></div>
                                    <div class="w-6 h-6 bg-gray-400 border-2 border-white"></div>
                                    <div class="w-6 h-6 bg-gray-500 border-2 border-white"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions & Invoices -->
                <div class="space-y-6">
                    <!-- Quick Actions -->
                    <div class="bg-white border border-gray-200 p-6">
                        <h2 class="text-base font-bold text-black uppercase tracking-wide font-display mb-4">Quick Actions</h2>
                        <div class="space-y-3">
                            <button class="w-full flex items-center justify-between p-3 bg-gray-50 hover:bg-gray-100 transition border border-gray-200">
                                <span class="text-sm font-medium text-gray-700">Create New Project</span>
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </button>
                            <button class="w-full flex items-center justify-between p-3 bg-gray-50 hover:bg-gray-100 transition border border-gray-200">
                                <span class="text-sm font-medium text-gray-700">Submit Support Ticket</span>
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </button>
                            <button class="w-full flex items-center justify-between p-3 bg-gray-50 hover:bg-gray-100 transition border border-gray-200">
                                <span class="text-sm font-medium text-gray-700">Request a Quote</span>
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Recent Invoices -->
                    <div class="bg-white border border-gray-200 p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-base font-bold text-black uppercase tracking-wide font-display">Recent Invoices</h2>
                            <a href="#" class="text-xs font-semibold text-gray-500 hover:text-black transition">VIEW ALL</a>
                        </div>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center p-3 border-b border-gray-100">
                                <div>
                                    <p class="text-sm font-semibold text-black">INV-001</p>
                                    <p class="text-xs text-gray-500">Feb 25, 2024</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-black">$3,500</p>
                                    <span class="text-xs bg-gray-100 text-gray-700 px-2 py-0.5">Paid</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center p-3 border-b border-gray-100">
                                <div>
                                    <p class="text-sm font-semibold text-black">INV-002</p>
                                    <p class="text-xs text-gray-500">Mar 1, 2024</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-black">$5,000</p>
                                    <span class="text-xs bg-gray-100 text-gray-700 px-2 py-0.5">Pending</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center p-3">
                                <div>
                                    <p class="text-sm font-semibold text-black">INV-003</p>
                                    <p class="text-xs text-gray-500">Mar 15, 2024</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-black">$2,500</p>
                                    <span class="text-xs bg-gray-100 text-gray-700 px-2 py-0.5">Paid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Feed -->
            <div class="bg-white border border-gray-200 mb-8">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-base font-bold text-black uppercase tracking-wide font-display">Recent Activity</h2>
                </div>
                <div class="divide-y divide-gray-100">
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-10 h-10 bg-gray-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-700">Project <span class="font-semibold">"E-commerce Website"</span> has been updated</p>
                            <p class="text-xs text-gray-400 mt-0.5">2 hours ago</p>
                        </div>
                        <span class="text-xs text-gray-400">VIEW →</span>
                    </div>
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-10 h-10 bg-gray-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-700">New message from support team</p>
                            <p class="text-xs text-gray-400 mt-0.5">Yesterday</p>
                        </div>
                        <span class="text-xs text-gray-400">VIEW →</span>
                    </div>
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-10 h-10 bg-gray-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-700">Invoice <span class="font-semibold">#INV-002</span> has been paid</p>
                            <p class="text-xs text-gray-400 mt-0.5">2 days ago</p>
                        </div>
                        <span class="text-xs text-gray-400">VIEW →</span>
                    </div>
                </div>
            </div>

            <!-- Support Section -->
            <div class="bg-gray-100 border border-gray-200 p-8 text-center">
                <svg class="w-12 h-12 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636L16 8m0 0l-2.364-2.364M16 8V4m-8 4H4m4 0h4M4 12h16M4 16h4m0 0l-2.364 2.364M8 16v4"></path>
                </svg>
                <h3 class="text-lg font-bold text-black mb-2 font-display">Need Help?</h3>
                <p class="text-gray-500 text-sm mb-6">Our support team is available 24/7 to assist you.</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="#" class="inline-flex items-center justify-center gap-2 bg-black text-white px-6 py-2.5 text-sm font-semibold hover:bg-gray-800 transition border border-black">
                        Contact Support
                    </a>
                    <a href="#" class="inline-flex items-center justify-center gap-2 border border-gray-300 bg-white text-gray-700 px-6 py-2.5 text-sm font-semibold hover:border-black hover:text-black transition">
                        Knowledge Base
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>