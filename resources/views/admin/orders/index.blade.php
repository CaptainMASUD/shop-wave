@extends('layouts.app')

@section('title', 'Manage Orders')

@section('content')
<section class="min-h-screen bg-slate-50">
    <div class="flex min-h-screen">
        @include('partials.admin-sidebar')

        <main class="flex-1 p-6 sm:p-8">
            <div class="w-full max-w-6xl mx-auto">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h1 class="text-3xl font-black text-slate-900">Orders</h1>
                        <p class="text-slate-500 mt-2">Manage all customer orders.</p>
                    </div>
                </div>

                @if(session('success'))
                    <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white border border-slate-200 rounded-[28px] shadow-soft overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left">
                            <thead class="bg-slate-50 border-b border-slate-200">
                                <tr>
                                    <th class="px-6 py-4 font-bold text-slate-700">Order ID</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Customer</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Phone</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Total</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Status</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Date</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $order)
                                    <tr class="border-b border-slate-100">
                                        <td class="px-6 py-4 font-semibold text-slate-900">
                                            #{{ $order->id }}
                                        </td>
                                        <td class="px-6 py-4 text-slate-600">
                                            <div class="font-semibold text-slate-900">{{ $order->user->name ?? 'N/A' }}</div>
                                            <div class="text-xs text-slate-500">{{ $order->user->email ?? '' }}</div>
                                        </td>
                                        <td class="px-6 py-4 text-slate-600">{{ $order->phone }}</td>
                                        <td class="px-6 py-4 text-slate-600">Tk {{ number_format($order->total_amount, 2) }}</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-semibold
                                                @if($order->status === 'pending') bg-yellow-100 text-yellow-700
                                                @elseif($order->status === 'processing') bg-blue-100 text-blue-700
                                                @elseif($order->status === 'shipped') bg-purple-100 text-purple-700
                                                @elseif($order->status === 'completed') bg-green-100 text-green-700
                                                @else bg-red-100 text-red-700
                                                @endif">
                                                {{ ucfirst($order->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-slate-600">
                                            {{ $order->created_at->format('d M Y') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2 flex-wrap">
                                                <a href="{{ route('admin.orders.show', $order) }}"
                                                   class="inline-flex items-center justify-center px-4 py-2 rounded-full border border-slate-200 text-slate-700 text-xs font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                                    View
                                                </a>

                                                <a href="{{ route('admin.orders.edit', $order) }}"
                                                   class="inline-flex items-center justify-center px-4 py-2 rounded-full border border-slate-200 text-slate-700 text-xs font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                                    Edit
                                                </a>

                                                <form method="POST" action="{{ route('admin.orders.destroy', $order) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            onclick="return confirm('Delete this order?')"
                                                            class="inline-flex items-center justify-center px-4 py-2 rounded-full border border-red-200 text-red-600 text-xs font-semibold hover:bg-red-50 transition">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="px-6 py-8 text-center text-slate-500">
                                            No orders found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-6">
                    {{ $orders->links() }}
                </div>
            </div>
        </main>
    </div>
</section>
@endsection