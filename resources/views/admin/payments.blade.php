@extends('layouts.admin')

@section('content')
<div class="bg-white border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-lg font-bold">Payment Notifications</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-4 text-left">Date</th>
                    <th class="p-4 text-left">User</th>
                    <th class="p-4 text-left">Amount</th>
                    <th class="p-4 text-left">Method</th>
                    <th class="p-4 text-left">Status</th>
                    <th class="p-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                <tr class="border-b">
                    <td class="p-4">{{ $payment->created_at->format('Y-m-d H:i') }}</td>
                    <td class="p-4">{{ $payment->user->name }}<br><small>{{ $payment->user->email }}</small></td>
                    <td class="p-4">{{ $payment->currency }} {{ number_format($payment->amount, 2) }}</td>
                    <td class="p-4">{{ strtoupper(str_replace('_', ' ', $payment->payment_method)) }}</td>
                    <td class="p-4">
                        @if($payment->status === 'pending')
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 text-xs">Pending</span>
                        @else
                            <span class="bg-green-100 text-green-800 px-2 py-1 text-xs">Confirmed</span>
                        @endif
                    </td>
                    <td class="p-4">
                        @if($payment->status === 'pending')
                            <form method="POST" action="{{ route('admin.payments.confirm', $payment) }}">
                                @csrf
                                <button type="submit" class="bg-green-600 text-white px-3 py-1 text-sm hover:bg-green-700">Confirm</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="p-4">
        {{ $payments->links() }}
    </div>
</div>
@endsection