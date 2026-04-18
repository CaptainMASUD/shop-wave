@extends('layouts.app')

@section('title', 'Order Details')

@section('content')
<section class="min-h-screen bg-slate-50">
    <div class="flex min-h-screen">
        @include('partials.user-sidebar')

        <main class="flex-1 p-6 sm:p-8">
            <div class="w-full max-w-6xl mx-auto">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                    <div>
                        <h1 class="text-3xl font-black text-slate-900">Order #{{ $order->id }}</h1>
                        <p class="text-slate-500 mt-2">This order belongs only to your account.</p>
                    </div>

                    <a href="{{ route('orders.index') }}"
                       class="px-6 py-3 rounded-full border border-slate-200 text-slate-700 font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                        Back to Orders
                    </a>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                    <div class="xl:col-span-2">
                        <div class="rounded-[28px] border border-slate-200 bg-white p-8 shadow-soft">
                            <h2 class="text-xl font-black text-slate-900 mb-5">Order Items</h2>

                            <div class="space-y-4">
                                @foreach($order->items as $item)
                                    <div class="rounded-[24px] border border-slate-200 bg-slate-50 p-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                        <div>
                                            <h3 class="text-lg font-bold text-slate-900">
                                                {{ $item->product->name ?? 'Product not found' }}
                                            </h3>
                                            <p class="text-sm text-slate-500 mt-1">Quantity: {{ $item->quantity }}</p>
                                        </div>

                                        <div class="text-left sm:text-right">
                                            <p class="text-sm text-slate-500">Unit Price</p>
                                            <p class="text-lg font-black text-slate-900">
                                                Tk {{ number_format($item->price, 2) }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="rounded-[28px] border border-slate-200 bg-white p-8 shadow-soft">
                            <h2 class="text-xl font-black text-slate-900 mb-5">Order Summary</h2>

                            <div class="space-y-4">
                                <div>
                                    <p class="text-sm font-semibold text-slate-500">Status</p>
                                    <p class="text-base font-bold text-slate-900">{{ ucfirst($order->status) }}</p>
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-slate-500">Phone</p>
                                    <p class="text-base text-slate-700">{{ $order->phone }}</p>
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-slate-500">Shipping Address</p>
                                    <p class="text-base text-slate-700 leading-7">{{ $order->shipping_address }}</p>
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-slate-500">Total Amount</p>
                                    <p class="text-2xl font-black text-orange-600">Tk {{ number_format($order->total_amount, 2) }}</p>
                                </div>

                                <div>
                                    <p class="text-sm font-semibold text-slate-500">Order Date</p>
                                    <p class="text-base text-slate-700">{{ $order->created_at->format('d M Y, h:i A') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-[28px] bg-slate-900 p-8 text-white shadow-soft">
                            <h3 class="text-xl font-black">Need More Products?</h3>
                            <p class="text-slate-300 mt-3 leading-7">
                                Continue shopping and place more orders from your dashboard.
                            </p>

                            <div class="mt-6">
                                <a href="{{ route('shop') }}"
                                   class="px-6 py-3 rounded-full bg-orange-500 text-white font-semibold hover:bg-orange-600 transition">
                                    Continue Shopping
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>
@endsection