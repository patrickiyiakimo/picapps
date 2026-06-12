<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard · ALTA</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300..700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
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
</body>
</html>