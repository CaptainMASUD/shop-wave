@extends('layouts.app')

@section('title', 'My Cart')

@section('content')
<section class="min-h-screen bg-slate-50">
    <div class="flex min-h-screen">
        @include('partials.user-sidebar')

        <main class="flex-1 p-6 sm:p-8">
            <div class="w-full max-w-6xl mx-auto">
                <div class="mb-6">
                    <h1 class="text-3xl font-black text-slate-900">My Cart</h1>
                    <p class="text-slate-500 mt-2">Review your selected products before checkout.</p>
                </div>

                @if(session('success'))
                    <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 rounded-2xl bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                        {{ session('error') }}
                    </div>
                @endif

                @php
                    $total = 0;
                @endphp

                @if(count($cart) > 0)
                    <div class="flex flex-wrap gap-3 mb-6">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button type="submit"
                                    class="px-5 py-3 rounded-full border border-red-200 text-red-600 text-sm font-semibold hover:bg-red-50 transition">
                                Clear Cart
                            </button>
                        </form>

                        <a href="{{ route('shop') }}"
                           class="px-5 py-3 rounded-full border border-slate-200 text-slate-700 text-sm font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                            Continue Shopping
                        </a>
                    </div>
                @endif

                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                    <div class="xl:col-span-2 space-y-5">
                        @forelse($cart as $item)
                            @php
                                $subtotal = $item['price'] * $item['quantity'];
                                $total += $subtotal;
                                $minusQuantity = max(1, $item['quantity'] - 1);
                                $plusQuantity = min($item['stock'], $item['quantity'] + 1);
                            @endphp

                            <div class="rounded-[28px] border border-slate-200 bg-white p-5 sm:p-6 shadow-soft">
                                <div class="flex flex-col md:flex-row gap-5">
                                    <div class="w-full md:w-28 h-28 rounded-[20px] overflow-hidden bg-slate-100 shrink-0">
                                        <img
                                            src="{{ $item['image'] ?: 'https://via.placeholder.com/300x300?text=Product' }}"
                                            alt="{{ $item['name'] }}"
                                            class="w-full h-full object-cover"
                                        >
                                    </div>

                                    <div class="flex-1">
                                        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                                            <div>
                                                <h3 class="text-lg font-bold text-slate-900">{{ $item['name'] }}</h3>
                                                <p class="text-sm text-slate-500 mt-1">
                                                    Price: Tk {{ number_format($item['price'], 2) }}
                                                </p>
                                            </div>

                                            <div class="text-left sm:text-right">
                                                <p class="text-sm text-slate-500">Subtotal</p>
                                                <p class="text-xl font-black text-slate-900 mt-1">
                                                    Tk {{ number_format($subtotal, 2) }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="mt-5 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                                            <div>
                                                <p class="text-sm font-semibold text-slate-700 mb-3">Quantity</p>

                                                <div class="inline-flex items-center rounded-full border border-slate-200 bg-slate-50 p-1">
                                                    <form action="{{ route('cart.update', $item['id']) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="quantity" value="{{ $minusQuantity }}">
                                                        <button type="submit"
                                                                class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-700 font-bold hover:border-orange-300 hover:text-orange-500 transition"
                                                                {{ $item['quantity'] <= 1 ? 'disabled' : '' }}>
                                                            -
                                                        </button>
                                                    </form>

                                                    <div class="min-w-[56px] text-center text-base font-bold text-slate-900">
                                                        {{ $item['quantity'] }}
                                                    </div>

                                                    <form action="{{ route('cart.update', $item['id']) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="quantity" value="{{ $plusQuantity }}">
                                                        <button type="submit"
                                                                class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-700 font-bold hover:border-orange-300 hover:text-orange-500 transition"
                                                                {{ $item['quantity'] >= $item['stock'] ? 'disabled' : '' }}>
                                                            +
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="flex flex-wrap items-center gap-3">
                                                <form action="{{ route('cart.update', $item['id']) }}" method="POST" class="flex flex-wrap items-center gap-2">
                                                    @csrf
                                                    <input
                                                        type="number"
                                                        name="quantity"
                                                        value="{{ $item['quantity'] }}"
                                                        min="1"
                                                        max="{{ $item['stock'] }}"
                                                        class="w-24 px-4 py-2.5 rounded-full border border-slate-200 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                                                    >
                                                    <button type="submit"
                                                            class="px-5 py-2.5 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                                                        Update
                                                    </button>
                                                </form>

                                                <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="px-5 py-2.5 rounded-full border border-red-200 text-red-600 text-sm font-semibold hover:bg-red-50 transition">
                                                        Remove
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="rounded-[28px] border border-slate-200 bg-white p-10 shadow-soft text-center">
                                <h3 class="text-2xl font-black text-slate-900">Your cart is empty</h3>
                                <p class="text-slate-500 mt-3">Add some products to continue shopping.</p>

                                <a href="{{ route('shop') }}"
                                   class="mt-6 inline-flex items-center justify-center px-6 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                                    Go To Shop
                                </a>
                            </div>
                        @endforelse
                    </div>

                    <div class="xl:col-span-1">
                        <div class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-soft sticky top-28">
                            <span class="text-orange-500 uppercase tracking-[0.22em] text-xs font-bold">Cart Summary</span>
                            <h2 class="text-2xl font-black text-slate-900 mt-3">Order Overview</h2>
                            <p class="text-slate-500 mt-2 text-sm leading-7">
                                Review your total and proceed to checkout when ready.
                            </p>

                            <div class="mt-6 space-y-4">
                                <div class="flex items-center justify-between text-sm text-slate-600">
                                    <span>Total Items</span>
                                    <span class="font-semibold">{{ collect($cart)->sum('quantity') }}</span>
                                </div>

                                <div class="flex items-center justify-between text-base font-semibold text-slate-900">
                                    <span>Total Amount</span>
                                    <span class="text-2xl font-black text-orange-600">
                                        Tk {{ number_format($total, 2) }}
                                    </span>
                                </div>
                            </div>

                            @if(count($cart) > 0)
                                <div class="mt-6 flex flex-col gap-3">
                                    <a href="{{ route('orders.create') }}"
                                       class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition">
                                        Proceed To Checkout
                                    </a>

                                    <a href="{{ route('shop') }}"
                                       class="inline-flex items-center justify-center px-6 py-3 rounded-full border border-slate-200 text-slate-700 text-sm font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                        Continue Shopping
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>
@endsection