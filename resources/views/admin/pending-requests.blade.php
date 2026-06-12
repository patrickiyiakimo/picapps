@extends('layouts.admin')

@section('content')
<div class="bg-white border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-lg font-bold">Pending Project Requests</h2>
        <p class="text-sm text-gray-500 mt-1">Review and respond to client project submissions</p>
    </div>
    <div class="divide-y divide-gray-100">
        @forelse($pendingRequests as $request)
        <div class="p-6">
            <div class="flex items-start justify-between">
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1">Pending Review</span>
                        <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1">{{ ucfirst($request->request_type ?? 'custom') }}</span>
                    </div>
                    <h3 class="font-bold text-black text-lg">{{ $request->name }}</h3>
                    <p class="text-sm text-gray-500 mt-1">Requested by: {{ $request->user->name }} ({{ $request->user->email }})</p>
                    <p class="text-sm text-gray-600 mt-3">{{ $request->description ?? 'No description provided.' }}</p>
                    @if($request->budget_range || $request->timeline)
                    <div class="flex gap-6 mt-3">
                        @if($request->budget_range)
                        <p class="text-sm text-gray-500">💰 Budget: {{ $request->budget_range }}</p>
                        @endif
                        @if($request->timeline)
                        <p class="text-sm text-gray-500">⏱️ Timeline: {{ $request->timeline }}</p>
                        @endif
                    </div>
                    @endif
                    <p class="text-xs text-gray-400 mt-3">Submitted: {{ \Carbon\Carbon::parse($request->created_at)->format('F j, Y \a\t g:i A') }}</p>
                </div>
                <div class="flex gap-2 ml-4">
                    <button onclick="openApproveModal({{ $request->id }}, '{{ addslashes($request->name) }}')" 
                            class="px-4 py-2 bg-green-600 text-white text-sm font-semibold hover:bg-green-700 transition">
                        Approve
                    </button>
                    <button onclick="openRejectModal({{ $request->id }}, '{{ addslashes($request->name) }}')" 
                            class="px-4 py-2 border border-red-300 text-red-600 text-sm font-semibold hover:bg-red-50 transition">
                        Reject
                    </button>
                    <a href="/admin/projects/{{ $request->id }}" 
                       class="px-4 py-2 border border-gray-300 text-gray-600 text-sm font-semibold hover:bg-gray-50 transition">
                        View Details
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="p-12 text-center text-gray-500">
            <svg class="w-20 h-20 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <p class="text-lg">No pending project requests</p>
            <p class="text-sm mt-2">When clients submit project requests, they will appear here.</p>
        </div>
        @endforelse
    </div>
    <div class="p-4">
        {{ $pendingRequests->links() }}
    </div>
</div>

<!-- Modals (same as dashboard) -->
@endsection