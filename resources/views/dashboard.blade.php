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

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        .font-display {
            font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
        }
        a, button, div, input, select, textarea {
            border-radius: 0 !important;
        }
        .card-hover {
            transition: all 0.25s ease;
        }
        .card-hover:hover {
            transform: translateY(-2px);
        }
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
        .timeline-item {
            position: relative;
            padding-left: 2rem;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 0.75rem;
            height: 0.75rem;
            background: #000;
        }
        .timeline-item::after {
            content: '';
            position: absolute;
            left: 0.3125rem;
            top: 1.5rem;
            bottom: -0.5rem;
            width: 2px;
            background: #e5e7eb;
        }
        .timeline-item:last-child::after {
            display: none;
        }
        .invoice-status {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .invoice-status::before {
            content: '';
            width: 0.5rem;
            height: 0.5rem;
            display: inline-block;
        }
        .invoice-status.paid::before {
            background: #10b981;
        }
        .invoice-status.pending::before {
            background: #f59e0b;
        }
        .invoice-status.overdue::before {
            background: #ef4444;
        }
        .project-status {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .project-status.approved {
            color: #10b981;
        }
        .project-status.pending {
            color: #f59e0b;
        }
        .project-status.rejected {
            color: #ef4444;
        }
        .copy-btn {
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .copy-btn:hover {
            opacity: 0.7;
        }
        .copied-tooltip {
            position: absolute;
            background: black;
            color: white;
            padding: 2px 8px;
            font-size: 10px;
            white-space: nowrap;
            z-index: 10;
        }
    </style>
</head>
<body class="bg-gray-50">

    <div class="min-h-screen">
        <!-- Premium Navbar -->
        <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <a href="/" class="flex items-center gap-2 group">
                        <span class="text-2xl font-bold text-black font-display tracking-tight">ALTA</span>
                    </a>

                    <div class="hidden md:flex items-center gap-8">
                        <a href="#" class="text-black border-b-2 border-black pb-1 text-sm font-semibold">Dashboard</a>
                        <a href="#" class="text-gray-500 hover:text-black transition text-sm font-medium">Projects</a>
                        <a href="#" class="text-gray-500 hover:text-black transition text-sm font-medium">Invoices</a>
                        <a href="#" class="text-gray-500 hover:text-black transition text-sm font-medium">Support</a>
                    </div>

                    <div class="flex items-center gap-5">
                        @if(Auth::user()->role === 'admin')
                            <a href="/admin" class="text-sm text-purple-600 hover:text-purple-700 transition font-medium">Admin Panel</a>
                        @endif

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
                    <button onclick="openRequestProjectModal()" class="inline-flex items-center gap-2 bg-white text-black px-6 py-2.5 text-sm font-semibold hover:bg-gray-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Request New Project
                    </button>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white border border-gray-200 p-6 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">Active Projects</p>
                            <p class="text-3xl font-bold text-black mt-1 font-display">{{ $stats['active_projects'] ?? 0 }}</p>
                            <p class="text-xs text-gray-500 mt-1">Currently in progress</p>
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
                            <p class="text-3xl font-bold text-black mt-1 font-display">{{ isset($finance) && $finance->default_currency === 'USD' ? '$' : '' }}{{ number_format($stats['total_spent'] ?? 0, 2) }}</p>
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
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">Outstanding Balance</p>
                            <p class="text-3xl font-bold text-black mt-1 font-display">{{ isset($finance) && $finance->default_currency === 'USD' ? '$' : '' }}{{ number_format($finance->outstanding_balance ?? 0, 2) }}</p>
                            <p class="text-xs text-red-500 mt-1">Due for payment</p>
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
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">Support Tickets</p>
                            <p class="text-3xl font-bold text-black mt-1 font-display">{{ $stats['support_tickets'] ?? 0 }}</p>
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

            <!-- Active Projects Section -->
            <div class="bg-white border border-gray-200 mb-8">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-base font-bold text-black uppercase tracking-wide font-display">Active Projects</h2>
                            <p class="text-sm text-gray-500 mt-1">Track progress and milestones of your ongoing projects</p>
                        </div>
                        <button onclick="openRequestProjectModal()" class="text-xs font-semibold text-gray-500 hover:text-black transition">+ REQUEST NEW</button>
                    </div>
                </div>
                
                <div class="p-6">
                    @forelse($projects as $project)
                    <div class="mb-6 last:mb-0">
                        <div class="flex items-center justify-between mb-3">
                            <div>
                                <h3 class="font-bold text-black">{{ $project->name }}</h3>
                                <p class="text-xs text-gray-500">Submitted {{ \Carbon\Carbon::parse($project->created_at)->format('M d, Y') }}</p>
                            </div>
                            <div class="flex items-center gap-2">
                                @if($project->status === 'active')
                                    <span class="text-xs bg-green-100 text-green-800 px-2 py-1">✓ Approved</span>
                                @elseif($project->status === 'pending')
                                    <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1">⏳ Pending Review</span>
                                @elseif($project->status === 'rejected')
                                    <span class="text-xs bg-red-100 text-red-800 px-2 py-1">✗ Not Approved</span>
                                @else
                                    <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1">{{ ucfirst($project->status) }}</span>
                                @endif
                            </div>
                        </div>
                        
                        @if($project->status === 'active')
                        <div class="mb-4">
                            <div class="flex justify-between text-xs text-gray-500 mb-1">
                                <span>Overall Progress</span>
                                <span>{{ $project->progress }}%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 overflow-hidden">
                                <div class="h-full bg-black transition-all duration-500" style="width: {{ $project->progress }}%"></div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 mt-4">
                            @php
                                $updates = json_decode($project->updates ?? '[]', true);
                                $updates = array_slice($updates, -3);
                            @endphp
                            
                            @forelse($updates as $update)
                            <div class="timeline-item">
                                <p class="text-sm text-gray-700">{{ $update['message'] }}</p>
                                <p class="text-xs text-gray-400 mt-0.5">{{ \Carbon\Carbon::parse($update['date'])->diffForHumans() }}</p>
                            </div>
                            @empty
                            <div class="text-center text-gray-400 text-sm py-2">
                                <p>Work will begin soon. We'll keep you updated on progress.</p>
                            </div>
                            @endforelse
                        </div>
                        
                        <div class="mt-4 pt-3 border-t border-gray-100">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-xs text-gray-500">Next milestone: 
                                        @if($project->progress < 25)
                                            Design Approval
                                        @elseif($project->progress < 50)
                                            Development Start
                                        @elseif($project->progress < 75)
                                            First Review
                                        @elseif($project->progress < 100)
                                            Final Testing
                                        @else
                                            Launch Preparation
                                        @endif
                                    </span>
                                </div>
                                <a href="#" class="text-xs text-black hover:text-gray-500 transition">View Details →</a>
                            </div>
                        </div>
                        @elseif($project->status === 'pending')
                        <div class="bg-yellow-50 p-4 border-l-4 border-yellow-500 mt-2">
                            <p class="text-sm text-yellow-800">Your project request is awaiting review by our team.</p>
                            <p class="text-xs text-yellow-600 mt-1">We'll notify you once a decision is made.</p>
                        </div>
                        @elseif($project->status === 'rejected')
                        <div class="bg-red-50 p-4 border-l-4 border-red-500 mt-2">
                            <p class="text-sm text-red-800">Your project request was not approved at this time.</p>
                            @if($project->admin_notes)
                            <p class="text-xs text-red-600 mt-1">Reason: {{ $project->admin_notes }}</p>
                            @endif
                            <button onclick="openRequestProjectModal()" class="mt-3 text-xs text-red-700 underline">Submit a new request →</button>
                        </div>
                        @endif
                    </div>
                    @empty
                    <div class="text-center py-12">
                        <svg class="w-20 h-20 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <p class="text-gray-500">No projects yet.</p>
                        <button onclick="openRequestProjectModal()" class="mt-4 inline-flex items-center gap-2 bg-black text-white px-6 py-2.5 text-sm font-semibold hover:bg-gray-800 transition">
                            Request Your First Project
                        </button>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Invoices Section -->
            <div class="bg-white border border-gray-200 mb-8">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-base font-bold text-black uppercase tracking-wide font-display">Invoices & Billing</h2>
                    <p class="text-sm text-gray-500 mt-1">View, download, and manage your invoices</p>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="text-left p-4 text-xs font-semibold text-gray-500">Invoice #</th>
                                <th class="text-left p-4 text-xs font-semibold text-gray-500">Date</th>
                                <th class="text-left p-4 text-xs font-semibold text-gray-500">Amount</th>
                                <th class="text-left p-4 text-xs font-semibold text-gray-500">Status</th>
                                <th class="text-left p-4 text-xs font-semibold text-gray-500">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse($invoices as $invoice)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4">
                                    <p class="text-sm font-semibold text-black">{{ $invoice->invoice_number }}</p>
                                </td>
                                <td class="p-4">
                                    <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($invoice->issue_date)->format('M d, Y') }}</p>
                                </td>
                                <td class="p-4">
                                    <p class="text-sm font-bold text-black">{{ $invoice->currency === 'USD' ? '$' : '' }}{{ number_format($invoice->amount, 2) }}</p>
                                </td>
                                <td class="p-4">
                                    <span class="invoice-status {{ $invoice->status }} text-sm">
                                        {{ ucfirst($invoice->status) }}
                                    </span>
                                </td>
                                <td class="p-4">
                                    <div class="flex gap-3">
                                        <a href="{{ route('invoices.download', $invoice) }}" class="text-xs text-gray-500 hover:text-black transition">Download PDF</a>
                                        @if($invoice->status === 'pending')
                                            <button onclick="openPaymentModal({{ $invoice->id }}, '{{ $invoice->amount }}', '{{ $invoice->currency }}')" class="text-xs text-green-600 hover:text-green-700 transition">Pay Now</button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="p-8 text-center text-gray-500">
                                    No invoices yet. Once we start working on your project, invoices will appear here.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Request Project Modal -->
            <div id="requestProjectModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">
                <div class="bg-white w-full max-w-lg">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-xl font-bold">Request New Project</h2>
                        <button onclick="closeRequestProjectModal()" class="text-gray-500 hover:text-black text-2xl">&times;</button>
                    </div>
                    <form method="POST" action="{{ route('projects.request') }}">
                        @csrf
                        <div class="p-6 space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Project Type *</label>
                                <select name="type" class="w-full border border-gray-300 p-2" required>
                                    <option value="">Select project type</option>
                                    <option value="website">Website Development</option>
                                    <option value="mobile_app">Mobile App Development</option>
                                    <option value="figma">Figma Design</option>
                                    <option value="ecommerce">E-commerce Platform</option>
                                    <option value="custom">Custom Solution</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Project Name *</label>
                                <input type="text" name="name" class="w-full border border-gray-300 p-2" placeholder="e.g., E-commerce Website" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                                <textarea name="description" rows="4" class="w-full border border-gray-300 p-2" placeholder="Describe your project requirements, goals, and any specific features you need..."></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Budget Range</label>
                                <select name="budget" class="w-full border border-gray-300 p-2">
                                    <option value="">Select budget range</option>
                                    <option value="$1,000 - $3,000">$1,000 - $3,000</option>
                                    <option value="$3,000 - $5,000">$3,000 - $5,000</option>
                                    <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                                    <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                                    <option value="$25,000+">$25,000+</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Timeline</label>
                                <select name="timeline" class="w-full border border-gray-300 p-2">
                                    <option value="">Select timeline</option>
                                    <option value="ASAP">ASAP (Within 2 weeks)</option>
                                    <option value="1 month">1 Month</option>
                                    <option value="2-3 months">2-3 Months</option>
                                    <option value="3-6 months">3-6 Months</option>
                                    <option value="Flexible">Flexible</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 flex justify-end gap-3">
                            <button type="button" onclick="closeRequestProjectModal()" class="px-4 py-2 border border-gray-300 text-gray-700 hover:bg-gray-50">Cancel</button>
                            <button type="submit" class="px-4 py-2 bg-black text-white hover:bg-gray-800">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Payment Modal -->
            <div id="paymentModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">
                <div class="bg-white w-full max-w-md">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-xl font-bold">Make a Payment</h2>
                        <button onclick="closePaymentModal()" class="text-gray-500 hover:text-black text-2xl">&times;</button>
                    </div>
                    <div class="p-6">
                        <div class="mb-4 p-4 bg-gray-50">
                            <p class="text-sm text-gray-500">Invoice Amount</p>
                            <p class="text-2xl font-bold text-black" id="invoiceAmount">$0.00</p>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Payment Method</label>
                            <select id="paymentMethod" class="w-full border border-gray-300 p-2">
                                <option value="bank">Bank Transfer (USD/GBP/EUR/NGN)</option>
                                <option value="crypto">Cryptocurrency (USDC/USDT)</option>
                            </select>
                        </div>
                        <div class="bg-blue-50 p-3 text-xs text-blue-700">
                            <p>After payment, please email proof of payment to payments@alta.agency with your invoice number.</p>
                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-200 flex justify-end gap-3">
                        <button onclick="closePaymentModal()" class="px-4 py-2 border border-gray-300 text-gray-700 hover:bg-gray-50">Cancel</button>
                        <a href="#" id="viewBankDetailsBtn" class="px-4 py-2 bg-black text-white hover:bg-gray-800 text-center">View Payment Details</a>
                    </div>
                </div>
            </div>

            <!-- Payment Information Section - Complete with All Accounts -->
            <div id="payment-info" class="bg-white border border-gray-200 mb-8">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-base font-bold text-black uppercase tracking-wide font-display">Payment Information</h2>
                    <p class="text-sm text-gray-500 mt-1">All invoices are sent via email. Payments are processed via bank transfer or cryptocurrency.</p>
                </div>
                
                <div class="p-6">
                    <!-- Bank Transfer Details - Complete with Flags -->
                    <div class="mb-8">
                        <h3 class="text-sm font-semibold text-black mb-3 flex items-center gap-2">
                            <span>🏦</span> Bank Transfer Details
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- USD Account - USA Flag -->
                            <div class="border border-gray-200 p-4 bg-gray-50 hover:border-black transition">
                                <div class="flex items-center gap-2 mb-3">
                                    <img src="https://flagcdn.com/w40/us.png" alt="USA" class="w-6 h-4 object-cover">
                                    <p class="font-semibold text-black text-sm">United States Dollar (USD)</p>
                                </div>
                                <div class="space-y-1 text-xs text-gray-600">
                                    <p><span class="font-medium">Account Holder:</span> Patrick Chinenyenwa Iyiakimo</p>
                                    <p><span class="font-medium">Account Number:</span> 218854314747</p>
                                    <p><span class="font-medium">Bank Name:</span> Lead Bank</p>
                                    <p><span class="font-medium">ACH Routing:</span> 101019644</p>
                                    <p><span class="font-medium">Wire Routing:</span> 101019644</p>
                                    <p><span class="font-medium">Account Type:</span> Checking</p>
                                    <p><span class="font-medium">Bank Address:</span> 1801 Main St., Kansas City, MO 64108</p>
                                </div>
                            </div>
                            
                            <!-- GBP Account - UK Flag -->
                            <div class="border border-gray-200 p-4 bg-gray-50 hover:border-black transition">
                                <div class="flex items-center gap-2 mb-3">
                                    <img src="https://flagcdn.com/w40/gb.png" alt="UK" class="w-6 h-4 object-cover">
                                    <p class="font-semibold text-black text-sm">British Pound (GBP)</p>
                                </div>
                                <div class="space-y-1 text-xs text-gray-600">
                                    <p><span class="font-medium">Account Holder:</span> Patrick Chinenyenwa Iyiakimo</p>
                                    <p><span class="font-medium">Account Number:</span> 41726617</p>
                                    <p><span class="font-medium">Bank Name:</span> Clear Junction Limited</p>
                                    <p><span class="font-medium">IBAN:</span> GB47CLJU04130741726617</p>
                                    <p><span class="font-medium">Sort Code:</span> 041307</p>
                                    <p><span class="font-medium">SWIFT Code:</span> CLJUGB21XXX</p>
                                    <p><span class="font-medium">Bank Address:</span> 4th Floor Imperial House, 15 Kingsway, London, WC2B 6UN</p>
                                </div>
                            </div>
                            
                            <!-- EUR Account - EU Flag -->
                            <div class="border border-gray-200 p-4 bg-gray-50 hover:border-black transition">
                                <div class="flex items-center gap-2 mb-3">
                                    <img src="https://flagcdn.com/w40/eu.png" alt="EU" class="w-6 h-4 object-cover">
                                    <p class="font-semibold text-black text-sm">Euro (EUR)</p>
                                </div>
                                <div class="space-y-1 text-xs text-gray-600">
                                    <p><span class="font-medium">Account Holder:</span> Patrick Chinenyenwa Iyiakimo</p>
                                    <p><span class="font-medium">IBAN:</span> GB47CLJU04130741726617</p>
                                    <p><span class="font-medium">Bank Name:</span> Clear Junction Limited</p>
                                    <p><span class="font-medium">SWIFT Code:</span> CLJUGB21XXX</p>
                                    <p><span class="font-medium">Bank Address:</span> 4th Floor Imperial House, 15 Kingsway, London, WC2B 6UN</p>
                                </div>
                            </div>
                            
                            <!-- NGN Account - Nigeria Flag -->
                            <div class="border border-gray-200 p-4 bg-gray-50 hover:border-black transition">
                                <div class="flex items-center gap-2 mb-3">
                                    <img src="https://flagcdn.com/w40/ng.png" alt="Nigeria" class="w-6 h-4 object-cover">
                                    <p class="font-semibold text-black text-sm">Nigerian Naira (NGN)</p>
                                </div>
                                <div class="space-y-1 text-xs text-gray-600">
                                    <p><span class="font-medium">Account Holder:</span> Patrick Chinenyenwa Iyiakimo</p>
                                    <p><span class="font-medium">Account Number:</span> 7650552325</p>
                                    <p><span class="font-medium">Bank Name:</span> Wema Bank</p>
                                    <p><span class="font-medium">Country:</span> Nigeria</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Complete Crypto Payment Details -->
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="text-sm font-semibold text-black mb-3 flex items-center gap-2">
                            <span>🪙</span> Cryptocurrency Payments
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- USDC BEP-20 -->
                            <div class="border border-gray-200 p-4 bg-gray-50 hover:border-black transition">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <span class="text-xl">🪙</span>
                                        <p class="font-semibold text-black text-sm">USDC (BEP-20)</p>
                                    </div>
                                    <span class="text-xs bg-gray-200 px-2 py-0.5">Binance Smart Chain</span>
                                </div>
                                <div class="relative">
                                    <code id="usdc-bep20" class="text-xs bg-gray-100 p-2 block break-all font-mono pr-8">0xbD084D6F6DeCed09B26f289325b300b4792cf67D</code>
                                    <button onclick="copyToClipboard('usdc-bep20')" class="absolute right-2 top-2 text-gray-400 hover:text-black copy-btn">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- USDC ERC-20 -->
                            <div class="border border-gray-200 p-4 bg-gray-50 hover:border-black transition">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <span class="text-xl">🪙</span>
                                        <p class="font-semibold text-black text-sm">USDC (ERC-20)</p>
                                    </div>
                                    <span class="text-xs bg-gray-200 px-2 py-0.5">Ethereum</span>
                                </div>
                                <div class="relative">
                                    <code id="usdc-erc20" class="text-xs bg-gray-100 p-2 block break-all font-mono pr-8">0x6c8839E1fE299105f84FccBC991E8DeCE004c597</code>
                                    <button onclick="copyToClipboard('usdc-erc20')" class="absolute right-2 top-2 text-gray-400 hover:text-black copy-btn">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- USDC Solana -->
                            <div class="border border-gray-200 p-4 bg-gray-50 hover:border-black transition">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <span class="text-xl">🪙</span>
                                        <p class="font-semibold text-black text-sm">USDC (Solana)</p>
                                    </div>
                                    <span class="text-xs bg-gray-200 px-2 py-0.5">Solana</span>
                                </div>
                                <div class="relative">
                                    <code id="usdc-solana" class="text-xs bg-gray-100 p-2 block break-all font-mono pr-8">F2jvHq631uqfQWrrHJfVTBgH3omSmaqhyhirQ4cRVtwb</code>
                                    <button onclick="copyToClipboard('usdc-solana')" class="absolute right-2 top-2 text-gray-400 hover:text-black copy-btn">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- USDT BEP-20 -->
                            <div class="border border-gray-200 p-4 bg-gray-50 hover:border-black transition">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <span class="text-xl">🪙</span>
                                        <p class="font-semibold text-black text-sm">USDT (BEP-20)</p>
                                    </div>
                                    <span class="text-xs bg-gray-200 px-2 py-0.5">Binance Smart Chain</span>
                                </div>
                                <div class="relative">
                                    <code id="usdt-bep20" class="text-xs bg-gray-100 p-2 block break-all font-mono pr-8">0x6c8839E1fE299105f84FccBC991E8DeCE004c597</code>
                                    <button onclick="copyToClipboard('usdt-bep20')" class="absolute right-2 top-2 text-gray-400 hover:text-black copy-btn">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- USDT TRC-20 -->
                            <div class="border border-gray-200 p-4 bg-gray-50 hover:border-black transition">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <span class="text-xl">🪙</span>
                                        <p class="font-semibold text-black text-sm">USDT (TRC-20)</p>
                                    </div>
                                    <span class="text-xs bg-gray-200 px-2 py-0.5">Tron</span>
                                </div>
                                <div class="relative">
                                    <code id="usdt-trc20" class="text-xs bg-gray-100 p-2 block break-all font-mono pr-8">TJxCePGFW1Cntck9399aoxyWcrR4heUFMC</code>
                                    <button onclick="copyToClipboard('usdt-trc20')" class="absolute right-2 top-2 text-gray-400 hover:text-black copy-btn">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 p-3 bg-gray-100 text-center text-xs text-gray-500">
                        After making a payment, please email <span class="font-mono">payments@alta.agency</span> with your invoice number and transaction reference.
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
                    <a href="/support" class="inline-flex items-center justify-center gap-2 bg-black text-white px-6 py-2.5 text-sm font-semibold hover:bg-gray-800 transition border border-black">
                        Contact Support
                    </a>
                    <a href="/knowledge-base" class="inline-flex items-center justify-center gap-2 border border-gray-300 bg-white text-gray-700 px-6 py-2.5 text-sm font-semibold hover:border-black hover:text-black transition">
                        Knowledge Base
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentInvoiceId = null;

        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.innerText;
            
            navigator.clipboard.writeText(text).then(() => {
                // Show temporary tooltip
                const btn = element.nextElementSibling;
                const originalHTML = btn.innerHTML;
                btn.innerHTML = '<svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
                setTimeout(() => {
                    btn.innerHTML = originalHTML;
                }, 1500);
            });
        }

        function openRequestProjectModal() {
            document.getElementById('requestProjectModal').classList.remove('hidden');
            document.getElementById('requestProjectModal').classList.add('flex');
        }

        function closeRequestProjectModal() {
            document.getElementById('requestProjectModal').classList.add('hidden');
            document.getElementById('requestProjectModal').classList.remove('flex');
        }

        function openPaymentModal(invoiceId, amount, currency) {
            currentInvoiceId = invoiceId;
            document.getElementById('invoiceAmount').innerText = currency === 'USD' ? '$' + parseFloat(amount).toLocaleString() : amount;
            document.getElementById('paymentModal').classList.remove('hidden');
            document.getElementById('paymentModal').classList.add('flex');
            
            const viewBtn = document.getElementById('viewBankDetailsBtn');
            viewBtn.onclick = function() {
                closePaymentModal();
                document.getElementById('payment-info').scrollIntoView({ behavior: 'smooth' });
            };
        }

        function closePaymentModal() {
            document.getElementById('paymentModal').classList.add('hidden');
            document.getElementById('paymentModal').classList.remove('flex');
            currentInvoiceId = null;
        }

        // Add CSRF token meta tag
        if (!document.querySelector('meta[name="csrf-token"]')) {
            const meta = document.createElement('meta');
            meta.name = 'csrf-token';
            meta.content = '{{ csrf_token() }}';
            document.head.appendChild(meta);
        }
    </script>
</body>
</html>
