@extends('layouts.app')

@section('title', 'Deals')

@section('content')

    {{-- TOP BANNER --}}
    <section class="bg-gradient-to-b from-orange-50 via-white to-white py-14 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-600 text-sm font-semibold mb-4">
                    Special Offers
                </span>
                <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900">
                    Best Deals Of The Season
                </h1>
                <p class="mt-4 max-w-2xl mx-auto text-slate-500 text-base sm:text-lg leading-8 font-medium">
                    Discover limited-time offers, discounted products, and exclusive deals on your favorite fashion and lifestyle items.
                </p>
            </div>
        </div>
    </section>

    {{-- FEATURED DEALS --}}
    <section class="pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <div class="lg:col-span-2">
                    <div class="relative bg-white border border-slate-200 rounded-[32px] overflow-hidden shadow-soft" id="dealsSlider">

                        <div class="deal-slide grid md:grid-cols-2 items-center opacity-100 transition-all duration-500">
                            <div class="p-8 sm:p-10">
                                <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-600 text-sm font-semibold mb-5">
                                    Discount Products
                                </span>
                                <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 leading-tight">
                                    Save More On Your Favorite Picks
                                </h2>
                                <p class="mt-4 text-slate-500 text-base leading-8 font-medium">
                                    Browse products currently on discount and enjoy better prices on selected items.
                                </p>
                                <div class="mt-8">
                                    <a href="{{ route('shop') }}" class="inline-flex items-center justify-center px-7 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold hover:bg-orange-600 transition">
                                        Shop Now
                                    </a>
                                </div>
                            </div>

                            <div class="h-[320px] md:h-full">
                                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=1200&q=80" alt="Featured Deal 1" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="deal-slide hidden grid md:grid-cols-2 items-center transition-all duration-500">
                            <div class="p-8 sm:p-10">
                                <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-600 text-sm font-semibold mb-5">
                                    Limited Time
                                </span>
                                <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 leading-tight">
                                    Don’t Miss These Discounted Items
                                </h2>
                                <p class="mt-4 text-slate-500 text-base leading-8 font-medium">
                                    Explore the latest discounted products before the deals are gone.
                                </p>
                                <div class="mt-8">
                                    <a href="{{ route('deals') }}" class="inline-flex items-center justify-center px-7 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold hover:bg-orange-600 transition">
                                        Explore Deals
                                    </a>
                                </div>
                            </div>

                            <div class="h-[320px] md:h-full">
                                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1200&q=80" alt="Featured Deal 2" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="deal-slide hidden grid md:grid-cols-2 items-center transition-all duration-500">
                            <div class="p-8 sm:p-10">
                                <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-600 text-sm font-semibold mb-5">
                                    Hot Offers
                                </span>
                                <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 leading-tight">
                                    Great Prices, Better Shopping
                                </h2>
                                <p class="mt-4 text-slate-500 text-base leading-8 font-medium">
                                    Save instantly on products with active discount pricing.
                                </p>
                                <div class="mt-8">
                                    <a href="{{ route('deals') }}" class="inline-flex items-center justify-center px-7 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold hover:bg-orange-600 transition">
                                        View Collection
                                    </a>
                                </div>
                            </div>

                            <div class="h-[320px] md:h-full">
                                <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?auto=format&fit=crop&w=1200&q=80" alt="Featured Deal 3" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="absolute left-6 right-6 bottom-6 z-20 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <button class="deal-dot w-2.5 h-2.5 rounded-full bg-orange-500" data-slide="0"></button>
                                <button class="deal-dot w-2.5 h-2.5 rounded-full bg-slate-300" data-slide="1"></button>
                                <button class="deal-dot w-2.5 h-2.5 rounded-full bg-slate-300" data-slide="2"></button>
                            </div>

                            <div class="flex items-center gap-2">
                                <button id="dealPrev" class="w-11 h-11 rounded-full bg-white/95 border border-slate-200 text-slate-700 hover:bg-orange-50 hover:text-orange-600 transition flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                    </svg>
                                </button>

                                <button id="dealNext" class="w-11 h-11 rounded-full bg-white/95 border border-slate-200 text-slate-700 hover:bg-orange-50 hover:text-orange-600 transition flex items-center justify-center shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-white border border-slate-200 rounded-[28px] p-6 shadow-soft">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-full bg-orange-100 text-orange-600 text-xs font-bold mb-4">
                            Discount Only
                        </span>
                        <h3 class="text-2xl font-black tracking-tight text-slate-900">
                            Filtered Deals
                        </h3>
                        <p class="text-slate-500 text-sm leading-7 mt-3">
                            This page only shows products that currently have discount prices.
                        </p>
                        <a href="{{ route('deals') }}" class="inline-flex items-center mt-5 text-sm font-semibold text-orange-600 hover:text-orange-700 transition">
                            View Deals
                        </a>
                    </div>

                    <div class="bg-slate-950 rounded-[28px] p-6 shadow-soft">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-full bg-white/10 text-orange-400 text-xs font-bold mb-4">
                            Save More
                        </span>
                        <h3 class="text-2xl font-black tracking-tight text-white">
                            Lower Prices
                        </h3>
                        <p class="text-slate-300 text-sm leading-7 mt-3">
                            All products listed below have active discounted pricing.
                        </p>
                        <a href="{{ route('shop') }}" class="inline-flex items-center mt-5 text-sm font-semibold text-orange-400 hover:text-orange-300 transition">
                            Browse Shop
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- DEAL PRODUCTS --}}
    <section class="pb-16 sm:pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between gap-4 mb-8">
                <div>
                    <span class="text-orange-500 uppercase tracking-[0.22em] text-xs font-bold">Discounted Products</span>
                    <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 mt-3">
                        Hot Deals Right Now
                    </h2>
                </div>
                <a href="{{ route('shop') }}" class="hidden sm:inline-flex items-center px-5 py-3 rounded-full border border-slate-200 text-sm font-semibold text-slate-700 hover:border-orange-200 hover:text-orange-600 transition">
                    View All Products
                </a>
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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($discountProducts as $product)
                    @php
                        $discountPercent = round((($product->price - $product->discount_price) / $product->price) * 100);
                    @endphp

                    <div class="bg-white rounded-[24px] overflow-hidden border border-slate-200 shadow-soft hover:-translate-y-1 transition duration-300">
                        <div class="relative h-64 overflow-hidden">
                            <img
                                src="{{ $product->image ?: 'https://via.placeholder.com/600x600?text=Product' }}"
                                alt="{{ $product->name }}"
                                class="w-full h-full object-cover hover:scale-105 transition duration-500"
                            >
                            <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-orange-500 text-white text-xs font-bold">
                                -{{ $discountPercent }}%
                            </span>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $product->name }}</h3>

                            @if($product->category)
                                <p class="text-sm text-slate-500 mb-3">{{ $product->category }}</p>
                            @endif

                            <div class="flex items-center gap-2 mb-4">
                                <span class="text-xl font-black text-slate-900">
                                    Tk {{ number_format($product->discount_price, 2) }}
                                </span>
                                <span class="text-sm text-slate-400 line-through font-medium">
                                    Tk {{ number_format($product->price, 2) }}
                                </span>
                            </div>

                            <form action="{{ route('cart.add', $product) }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full px-4 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 sm:col-span-2 lg:col-span-4">
                        <div class="bg-white rounded-[24px] border border-slate-200 p-10 text-center text-slate-500 shadow-soft">
                            No discounted products are available right now.
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $discountProducts->links() }}
            </div>
        </div>
    </section>

    {{-- NEWSLETTER --}}
    <section class="pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-[32px] bg-slate-950 px-6 py-10 sm:px-10 sm:py-12 lg:px-14 lg:py-14">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <span class="text-orange-400 uppercase tracking-[0.22em] text-xs font-bold">More Savings</span>
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white mt-3">
                            Subscribe For Exclusive Deal Alerts
                        </h2>
                        <p class="text-slate-400 text-base leading-8 mt-4 max-w-xl">
                            Be the first to know about flash sales, limited offers, and discount updates.
                        </p>
                    </div>

                    <form class="flex flex-col sm:flex-row gap-3">
                        <input
                            type="email"
                            placeholder="Enter your email"
                            class="flex-1 px-5 py-3.5 rounded-full bg-white text-slate-900 border-0 outline-none focus:ring-4 focus:ring-orange-200"
                        >
                        <button
                            type="submit"
                            class="px-7 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold hover:bg-orange-600 transition">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        const dealSlides = document.querySelectorAll('#dealsSlider .deal-slide');
        const dealDots = document.querySelectorAll('#dealsSlider .deal-dot');
        const dealPrev = document.getElementById('dealPrev');
        const dealNext = document.getElementById('dealNext');
        let currentDealSlide = 0;

        function showDealSlide(index) {
            dealSlides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('hidden');
                } else {
                    slide.classList.add('hidden');
                }
            });

            dealDots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-slate-300');
                    dot.classList.add('bg-orange-500');
                } else {
                    dot.classList.remove('bg-orange-500');
                    dot.classList.add('bg-slate-300');
                }
            });
        }

        function nextDealSlide() {
            currentDealSlide = (currentDealSlide + 1) % dealSlides.length;
            showDealSlide(currentDealSlide);
        }

        function prevDealSlide() {
            currentDealSlide = (currentDealSlide - 1 + dealSlides.length) % dealSlides.length;
            showDealSlide(currentDealSlide);
        }

        dealNext?.addEventListener('click', nextDealSlide);
        dealPrev?.addEventListener('click', prevDealSlide);

        dealDots.forEach(dot => {
            dot.addEventListener('click', () => {
                currentDealSlide = Number(dot.dataset.slide);
                showDealSlide(currentDealSlide);
            });
        });

        if (dealSlides.length > 0) {
            setInterval(nextDealSlide, 5000);
        }
    </script>

@endsection