@extends('layouts.admin')

@section('content')
<div class="bg-white border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-lg font-bold">Manage Users</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="text-left p-4">Name</th>
                    <th class="text-left p-4">Email</th>
                    <th class="text-left p-4">Role</th>
                    <th class="text-left p-4">Total Spent</th>
                    <th class="text-left p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="border-b border-gray-100">
                    <td class="p-4">{{ $user->name }}</td>
                    <td class="p-4">{{ $user->email }}</td>
                    <td class="p-4">
                        <span class="text-xs bg-gray-100 px-2 py-1">{{ ucfirst($user->role) }}</span>
                    </td>
                    <td class="p-4">${{ number_format($user->total_spent, 2) }}</td>
                    <td class="p-4">
                        <a href="/admin/users/{{ $user->id }}/edit" class="text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="p-4">
        {{ $users->links() }}
    </div>
</div>
@endsection