@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

    <section class="bg-gradient-to-b from-orange-50 via-white to-white py-14 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-600 text-sm font-semibold mb-4">
                    Checkout
                </span>
                <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900">
                    Complete Your Order
                </h1>
                <p class="mt-4 max-w-2xl mx-auto text-slate-500 text-base sm:text-lg leading-8 font-medium">
                    Confirm your shipping details and review your cart before placing the order.
                </p>
            </div>
        </div>
    </section>

    <section class="pb-20 pt-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8">

                <div class="bg-white border border-slate-200 rounded-[28px] p-6 sm:p-8 shadow-soft">
                    <div class="mb-6">
                        <span class="text-orange-500 uppercase tracking-[0.22em] text-xs font-bold">Shipping Information</span>
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 mt-3">
                            Place Your Order
                        </h2>
                        <p class="text-slate-500 text-sm sm:text-base mt-3 leading-7">
                            Enter your delivery details below to complete checkout.
                        </p>
                    </div>

                    <form action="{{ route('orders.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number</label>
                            <input
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="Enter phone number"
                                class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                            >
                            @error('phone')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Shipping Address</label>
                            <textarea
                                name="shipping_address"
                                rows="6"
                                placeholder="Enter full shipping address"
                                class="w-full px-5 py-4 rounded-[24px] border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300 resize-none"
                            >{{ old('shipping_address') }}</textarea>
                            @error('shipping_address')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition"
                        >
                            Confirm Order
                        </button>
                    </form>
                </div>

                <div class="space-y-8">
                    <div class="bg-white border border-slate-200 rounded-[28px] p-6 sm:p-8 shadow-soft">
                        <span class="text-orange-500 uppercase tracking-[0.22em] text-xs font-bold">Order Summary</span>
                        <h2 class="text-3xl font-black tracking-tight text-slate-900 mt-3 mb-6">
                            Your Cart
                        </h2>

                        @php $total = 0; @endphp

                        <div class="space-y-4">
                            @foreach($cart as $item)
                                @php
                                    $price = $item['discount_price'] ?? $item['price'];
                                    $subtotal = $price * $item['quantity'];
                                    $total += $subtotal;
                                @endphp

                                <div class="flex items-center justify-between gap-4 rounded-[24px] border border-slate-200 bg-slate-50 p-5">
                                    <div>
                                        <h3 class="text-lg font-bold text-slate-900">{{ $item['name'] }}</h3>
                                        <p class="text-sm text-slate-500 mt-1">Qty: {{ $item['quantity'] }}</p>
                                    </div>

                                    <div class="text-right">
                                        <p class="text-sm text-slate-500">Subtotal</p>
                                        <p class="text-lg font-black text-slate-900">৳{{ number_format($subtotal, 2) }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-6 pt-6 border-t border-slate-200 flex items-center justify-between">
                            <span class="text-lg font-bold text-slate-900">Total</span>
                            <span class="text-2xl font-black text-slate-900">৳{{ number_format($total, 2) }}</span>
                        </div>
                    </div>

                    <div class="bg-slate-950 rounded-[28px] p-8 text-white shadow-soft">
                        <span class="text-orange-400 uppercase tracking-[0.22em] text-xs font-bold">Fast Delivery</span>
                        <h3 class="text-2xl sm:text-3xl font-black tracking-tight mt-3">
                            Safe & Easy Checkout
                        </h3>
                        <p class="text-slate-300 mt-4 leading-8 text-sm sm:text-base">
                            Double-check your details before submitting your order. We will process it as soon as possible.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection