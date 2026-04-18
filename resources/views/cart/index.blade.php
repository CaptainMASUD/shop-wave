@extends('layouts.app')

@section('title', 'Cart')

@section('content')
<section class="py-14 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Your Cart</h1>
                <p class="text-slate-500 mt-2">Review your selected products.</p>
            </div>

            @if(count($cart) > 0)
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-5 py-3 rounded-full border border-red-200 text-red-600 text-sm font-semibold hover:bg-red-50 transition">
                        Clear Cart
                    </button>
                </form>
            @endif
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

        @forelse($cart as $item)
            @php
                $price = $item['discount_price'] ?? $item['price'];
                $subtotal = $price * $item['quantity'];
                $total += $subtotal;
            @endphp

            <div class="bg-white border border-slate-200 rounded-[28px] p-5 sm:p-6 shadow-soft mb-5">
                <div class="flex flex-col md:flex-row md:items-center gap-5">
                    <div class="w-full md:w-28 h-28 rounded-[20px] overflow-hidden bg-slate-100 shrink-0">
                        <img
                            src="{{ $item['image'] ?: 'https://via.placeholder.com/300x300?text=Product' }}"
                            alt="{{ $item['name'] }}"
                            class="w-full h-full object-cover"
                        >
                    </div>

                    <div class="flex-1">
                        <h3 class="text-lg font-bold text-slate-900">{{ $item['name'] }}</h3>
                        <p class="text-sm text-slate-500 mt-1">
                            Price: Tk {{ number_format($price, 2) }}
                        </p>
                        <p class="text-sm text-slate-500">
                            Stock: {{ $item['stock'] }}
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3">
                        <form action="{{ route('cart.update', $item['id']) }}" method="POST" class="flex items-center gap-2">
                            @csrf
                            <input
                                type="number"
                                name="quantity"
                                value="{{ $item['quantity'] }}"
                                min="1"
                                max="{{ $item['stock'] }}"
                                class="w-24 px-4 py-2 rounded-full border border-slate-200 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                            >
                            <button type="submit" class="px-4 py-2 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                                Update
                            </button>
                        </form>

                        <div class="text-base font-bold text-slate-900">
                            Tk {{ number_format($subtotal, 2) }}
                        </div>

                        <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 rounded-full border border-red-200 text-red-600 text-sm font-semibold hover:bg-red-50 transition">
                                Remove
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="bg-white border border-slate-200 rounded-[28px] p-10 shadow-soft text-center">
                <h3 class="text-2xl font-black text-slate-900">Your cart is empty</h3>
                <p class="text-slate-500 mt-3">Add some products to continue shopping.</p>

                <a href="{{ route('shop') }}"
                   class="mt-6 inline-flex items-center justify-center px-6 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                    Go To Shop
                </a>
            </div>
        @endforelse

        @if(count($cart) > 0)
            <div class="mt-8 bg-white border border-slate-200 rounded-[28px] p-6 shadow-soft">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-black text-slate-900">Total</h2>
                        <p class="text-slate-500 mt-1">Proceed to checkout when you're ready.</p>
                    </div>

                    <div class="text-2xl font-black text-orange-600">
                        Tk {{ number_format($total, 2) }}
                    </div>
                </div>

                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('orders.create') }}"
                       class="inline-flex items-center justify-center px-6 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition">
                        Proceed To Checkout
                    </a>

                    <a href="{{ route('shop') }}"
                       class="inline-flex items-center justify-center px-6 py-3 rounded-full border border-slate-200 text-slate-700 text-sm font-semibold hover:bg-slate-50 transition">
                        Continue Shopping
                    </a>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection