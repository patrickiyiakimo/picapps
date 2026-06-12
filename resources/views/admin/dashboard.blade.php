<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard · ALTA</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300..700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        a, button, div {
            border-radius: 0 !important;
        }
        .request-card {
            transition: all 0.25s ease;
        }
        .request-card:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Admin Navbar -->
        <nav class="bg-black text-white sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <a href="/admin" class="text-xl font-bold font-display tracking-tight">ALTA ADMIN</a>
                    <div class="flex items-center gap-6">
                        <a href="/admin/users" class="text-sm hover:text-gray-300 transition">Users</a>
                        <a href="/admin/invoices" class="text-sm hover:text-gray-300 transition">Invoices</a>
                        <a href="/admin/projects" class="text-sm hover:text-gray-300 transition">Projects</a>
                        <a href="/admin/pending-requests" class="text-sm hover:text-gray-300 transition relative">
                            Pending Requests
                            @if($pendingRequests > 0)
                            <span class="absolute -top-1 -right-3 bg-red-500 text-white text-xs px-1.5 py-0.5">{{ $pendingRequests }}</span>
                            @endif
                        </a>
                        <a href="/dashboard" class="text-sm hover:text-gray-300 transition">Client Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-sm text-red-400 hover:text-red-300 transition">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div class="max-w-7xl mx-auto px-5 lg:px-8 py-8">
            <h1 class="text-3xl font-bold mb-8">Admin Dashboard</h1>
            
            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-8">
                <div class="bg-white border border-gray-200 p-6">
                    <p class="text-sm text-gray-500">Total Users</p>
                    <p class="text-3xl font-bold text-black">{{ $totalUsers }}</p>
                </div>
                <div class="bg-white border border-gray-200 p-6">
                    <p class="text-sm text-gray-500">Total Revenue</p>
                    <p class="text-3xl font-bold text-black">${{ number_format($totalRevenue, 2) }}</p>
                </div>
                <div class="bg-white border border-gray-200 p-6">
                    <p class="text-sm text-gray-500">Active Projects</p>
                    <p class="text-3xl font-bold text-black">{{ $activeProjects }}</p>
                </div>
                <div class="bg-white border border-gray-200 p-6">
                    <p class="text-sm text-gray-500">Total Invoices</p>
                    <p class="text-3xl font-bold text-black">{{ $users->sum(function($u) { return $u->invoices->count(); }) }}</p>
                </div>
                <div class="bg-white border border-gray-200 p-6">
                    <p class="text-sm text-gray-500">Pending Requests</p>
                    <p class="text-3xl font-bold text-yellow-600">{{ $pendingRequests }}</p>
                </div>
            </div>

            <!-- Pending Project Requests -->
            <div class="bg-white border border-gray-200 mb-8">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-lg font-bold">Pending Project Requests</h2>
                            <p class="text-sm text-gray-500 mt-1">Review and respond to client project submissions</p>
                        </div>
                        <a href="/admin/pending-requests" class="text-sm text-blue-600 hover:text-blue-700">View All →</a>
                    </div>
                </div>
                <div class="divide-y divide-gray-100">
                    @forelse($recentRequests as $request)
                    <div class="p-6 request-card">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1">Pending</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">{{ ucfirst($request->request_type ?? 'custom') }}</span>
                                </div>
                                <h3 class="font-bold text-black text-lg">{{ $request->name }}</h3>
                                <p class="text-sm text-gray-500 mt-1">Requested by: {{ $request->user->name }} ({{ $request->user->email }})</p>
                                <p class="text-sm text-gray-600 mt-2">{{ $request->description ?? 'No description provided.' }}</p>
                                @if($request->budget_range || $request->timeline)
                                <div class="flex gap-4 mt-3">
                                    @if($request->budget_range)
                                    <p class="text-xs text-gray-500">💰 Budget: {{ $request->budget_range }}</p>
                                    @endif
                                    @if($request->timeline)
                                    <p class="text-xs text-gray-500">⏱️ Timeline: {{ $request->timeline }}</p>
                                    @endif
                                </div>
                                @endif
                                <p class="text-xs text-gray-400 mt-2">Submitted: {{ \Carbon\Carbon::parse($request->created_at)->diffForHumans() }}</p>
                            </div>
                            <div class="flex gap-2">
                                <button onclick="openApproveModal({{ $request->id }}, '{{ addslashes($request->name) }}')" 
                                        class="px-3 py-1.5 bg-green-600 text-white text-xs font-semibold hover:bg-green-700 transition">
                                    Approve
                                </button>
                                <button onclick="openRejectModal({{ $request->id }}, '{{ addslashes($request->name) }}')" 
                                        class="px-3 py-1.5 border border-red-300 text-red-600 text-xs font-semibold hover:bg-red-50 transition">
                                    Reject
                                </button>
                                <a href="/admin/projects/{{ $request->id }}" 
                                   class="px-3 py-1.5 border border-gray-300 text-gray-600 text-xs font-semibold hover:bg-gray-50 transition">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="p-8 text-center text-gray-500">
                        <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <p>No pending project requests.</p>
                        <p class="text-sm mt-1">When clients submit projects, they'll appear here.</p>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Recent Users -->
            <div class="bg-white border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-lg font-bold">Recent Users</h2>
                </div>
                <div class="divide-y divide-gray-100">
                    @foreach($users->take(5) as $user)
                    <div class="p-6 flex justify-between items-center">
                        <div>
                            <p class="font-semibold">{{ $user->name }}</p>
                            <p class="text-sm text-gray-500">{{ $user->email }}</p>
                        </div>
                        <div class="flex gap-2">
                            <span class="text-xs bg-gray-100 px-2 py-1">{{ ucfirst($user->role) }}</span>
                            <a href="/admin/users/{{ $user->id }}/edit" class="text-xs text-blue-600">Edit</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Approve Modal -->
    <div id="approveModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">
        <div class="bg-white w-full max-w-md">
            <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-xl font-bold">Approve Project</h2>
                <button onclick="closeApproveModal()" class="text-gray-500 hover:text-black text-2xl">&times;</button>
            </div>
            <form method="POST" id="approveForm">
                @csrf
                <div class="p-6 space-y-4">
                    <p class="text-sm text-gray-600" id="approveProjectName"></p>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Admin Notes (Optional)</label>
                        <textarea name="admin_notes" rows="3" class="w-full border border-gray-300 p-2" placeholder="Add any notes or instructions for the client..."></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                        <input type="date" name="start_date" value="{{ date('Y-m-d') }}" class="w-full border border-gray-300 p-2">
                    </div>
                </div>
                <div class="p-6 border-t border-gray-200 flex justify-end gap-3">
                    <button type="button" onclick="closeApproveModal()" class="px-4 py-2 border border-gray-300 text-gray-700 hover:bg-gray-50">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white hover:bg-green-700">Approve Project</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Reject Modal -->
    <div id="rejectModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">
        <div class="bg-white w-full max-w-md">
            <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-xl font-bold">Reject Project</h2>
                <button onclick="closeRejectModal()" class="text-gray-500 hover:text-black text-2xl">&times;</button>
            </div>
            <form method="POST" id="rejectForm">
                @csrf
                <div class="p-6 space-y-4">
                    <p class="text-sm text-gray-600" id="rejectProjectName"></p>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Reason for Rejection *</label>
                        <textarea name="rejection_reason" rows="3" class="w-full border border-gray-300 p-2" required placeholder="Explain why the project cannot be accepted at this time..."></textarea>
                    </div>
                </div>
                <div class="p-6 border-t border-gray-200 flex justify-end gap-3">
                    <button type="button" onclick="closeRejectModal()" class="px-4 py-2 border border-gray-300 text-gray-700 hover:bg-gray-50">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white hover:bg-red-700">Reject Project</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openApproveModal(projectId, projectName) {
            document.getElementById('approveProjectName').innerText = `You are about to approve "${projectName}". This will notify the client.`;
            document.getElementById('approveForm').action = `/admin/projects/${projectId}/approve`;
            document.getElementById('approveModal').classList.remove('hidden');
            document.getElementById('approveModal').classList.add('flex');
        }

        function closeApproveModal() {
            document.getElementById('approveModal').classList.add('hidden');
            document.getElementById('approveModal').classList.remove('flex');
        }

        function openRejectModal(projectId, projectName) {
            document.getElementById('rejectProjectName').innerText = `You are about to reject "${projectName}". Please provide a reason.`;
            document.getElementById('rejectForm').action = `/admin/projects/${projectId}/reject`;
            document.getElementById('rejectModal').classList.remove('hidden');
            document.getElementById('rejectModal').classList.add('flex');
        }

        function closeRejectModal() {
            document.getElementById('rejectModal').classList.add('hidden');
            document.getElementById('rejectModal').classList.remove('flex');
        }
    </script>
</body>
</html>