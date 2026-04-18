@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- HERO SLIDER --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-orange-50 via-white to-white">
        <div class="relative h-[72vh] min-h-[520px]" id="slider">
            <div class="slide absolute inset-0 bg-cover bg-center opacity-100 transition-all duration-700"
                 style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1600&q=80');">
                <div class="absolute inset-0 bg-slate-950/55"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/70 via-slate-950/35 to-transparent"></div>

                <div class="relative z-10 h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
                    <div class="max-w-2xl text-white">
                        <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-500/95 text-[12px] sm:text-sm font-semibold tracking-wide shadow-lg mb-5">
                            New Collection
                        </span>

                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-[1.05] mb-5">
                            Upgrade Your Everyday Style
                        </h1>

                        <p class="text-[15px] sm:text-lg font-medium text-slate-200/95 leading-7 mb-8 max-w-xl">
                            Discover premium fashion, accessories, and lifestyle products designed for modern living.
                        </p>

                        <div class="flex flex-wrap items-center gap-4">
                            <a href="{{ route('shop') }}" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold shadow-lg shadow-orange-500/25 hover:bg-orange-600 transition">
                                Shop Now
                                <x-heroicon-o-arrow-right class="w-5 h-5" />
                            </a>

                            <a href="{{ route('deals') }}" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-white/12 backdrop-blur text-white text-sm sm:text-base font-semibold border border-white/20 hover:bg-white/20 transition">
                                Explore More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide absolute inset-0 bg-cover bg-center opacity-0 pointer-events-none transition-all duration-700"
                 style="background-image: url('https://images.unsplash.com/photo-1523381210434-271e8be1f52b?auto=format&fit=crop&w=1600&q=80');">
                <div class="absolute inset-0 bg-slate-950/55"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/70 via-slate-950/35 to-transparent"></div>

                <div class="relative z-10 h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
                    <div class="max-w-2xl text-white">
                        <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-500/95 text-[12px] sm:text-sm font-semibold tracking-wide shadow-lg mb-5">
                            Big Sale
                        </span>

                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-[1.05] mb-5">
                            Fresh Looks, Better Prices
                        </h1>

                        <p class="text-[15px] sm:text-lg font-medium text-slate-200/95 leading-7 mb-8 max-w-xl">
                            Grab the latest trends with exclusive discounts and stylish picks for every season.
                        </p>

                        <a href="{{ route('deals') }}" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold shadow-lg shadow-orange-500/25 hover:bg-orange-600 transition">
                            Explore Deals
                            <x-heroicon-o-arrow-right class="w-5 h-5" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="slide absolute inset-0 bg-cover bg-center opacity-0 pointer-events-none transition-all duration-700"
                 style="background-image: url('https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=1600&q=80');">
                <div class="absolute inset-0 bg-slate-950/55"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/70 via-slate-950/35 to-transparent"></div>

                <div class="relative z-10 h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
                    <div class="max-w-2xl text-white">
                        <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-500/95 text-[12px] sm:text-sm font-semibold tracking-wide shadow-lg mb-5">
                            Trending Now
                        </span>

                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-[1.05] mb-5">
                            Make Your Look Stand Out
                        </h1>

                        <p class="text-[15px] sm:text-lg font-medium text-slate-200/95 leading-7 mb-8 max-w-xl">
                            Minimal, elegant, and bold — shop standout pieces curated for your lifestyle.
                        </p>

                        <a href="{{ route('shop') }}" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold shadow-lg shadow-orange-500/25 hover:bg-orange-600 transition">
                            View Collection
                            <x-heroicon-o-arrow-right class="w-5 h-5" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-8 right-4 sm:right-8 z-20 flex gap-3">
                <button id="prevSlide" class="w-11 h-11 rounded-full bg-white/90 hover:bg-white shadow-md border border-white/70 flex items-center justify-center transition">
                    <x-heroicon-o-chevron-left class="w-5 h-5 text-slate-800" />
                </button>
                <button id="nextSlide" class="w-11 h-11 rounded-full bg-white/90 hover:bg-white shadow-md border border-white/70 flex items-center justify-center transition">
                    <x-heroicon-o-chevron-right class="w-5 h-5 text-slate-800" />
                </button>
            </div>
        </div>
    </section>

    {{-- FEATURE BAR --}}
    <section class="-mt-10 relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white/95 backdrop-blur rounded-[28px] shadow-[0_18px_60px_rgba(15,23,42,0.08)] border border-orange-100 p-6 lg:p-7 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-2xl bg-orange-100 flex items-center justify-center shrink-0">
                        <x-heroicon-o-truck class="w-5 h-5 text-orange-600" />
                    </div>
                    <div>
                        <h4 class="font-bold text-base text-slate-900">Free Shipping</h4>
                        <p class="text-slate-500 text-sm mt-1">On orders over Tk 5,000</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-2xl bg-orange-50 flex items-center justify-center shrink-0">
                        <x-heroicon-o-shield-check class="w-5 h-5 text-orange-500" />
                    </div>
                    <div>
                        <h4 class="font-bold text-base text-slate-900">Secure Payment</h4>
                        <p class="text-slate-500 text-sm mt-1">100% protected checkout</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-2xl bg-orange-100/70 flex items-center justify-center shrink-0">
                        <x-heroicon-o-arrow-path class="w-5 h-5 text-orange-600" />
                    </div>
                    <div>
                        <h4 class="font-bold text-base text-slate-900">Easy Return</h4>
                        <p class="text-slate-500 text-sm mt-1">7 day return policy</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-2xl bg-orange-50 flex items-center justify-center shrink-0">
                        <x-heroicon-o-device-phone-mobile class="w-5 h-5 text-orange-500" />
                    </div>
                    <div>
                        <h4 class="font-bold text-base text-slate-900">24/7 Support</h4>
                        <p class="text-slate-500 text-sm mt-1">Dedicated support team</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUCTS --}}
    <section class="py-20 bg-gradient-to-b from-white to-orange-50/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
                <div>
                    <span class="text-orange-500 uppercase tracking-[0.22em] text-xs font-bold">Our Products</span>
                    <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 mt-3">
                        Popular Picks
                    </h2>
                </div>

                <a href="{{ route('shop') }}" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-white border border-orange-100 text-orange-600 text-sm font-semibold shadow-sm hover:bg-orange-50 transition">
                    View All
                    <x-heroicon-o-arrow-right class="w-4 h-4" />
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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @forelse($products as $product)
                    <div class="group bg-white rounded-[24px] overflow-hidden border border-slate-100 shadow-[0_12px_32px_rgba(15,23,42,0.06)] hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(15,23,42,0.10)] transition duration-300">
                        <div class="relative h-64 overflow-hidden">
                            <img
                                src="{{ $product->image ?: 'https://via.placeholder.com/600x600?text=Product' }}"
                                alt="{{ $product->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                            >

                            @if($product->discount_price)
                                <span class="absolute top-4 left-4 inline-flex items-center px-3 py-1 rounded-full bg-orange-500 text-white text-xs font-bold shadow-md">
                                    Sale
                                </span>
                            @endif
                        </div>

                        <div class="p-5">
                            @if($product->category)
                                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-orange-500 mb-2">
                                    {{ $product->category }}
                                </p>
                            @endif

                            <h3 class="text-lg font-bold text-slate-900 mb-3">
                                {{ $product->name }}
                            </h3>

                            <div class="flex items-center gap-2 mb-4">
                                @if($product->discount_price)
                                    <span class="text-xl font-black tracking-tight text-slate-900">
                                        Tk {{ number_format($product->discount_price, 2) }}
                                    </span>
                                    <span class="text-sm font-medium text-slate-400 line-through">
                                        Tk {{ number_format($product->price, 2) }}
                                    </span>
                                @else
                                    <span class="text-xl font-black tracking-tight text-slate-900">
                                        Tk {{ number_format($product->price, 2) }}
                                    </span>
                                @endif
                            </div>

                            <div class="flex items-center justify-between gap-3">
                                <span class="text-sm text-slate-500">
                                    Stock: {{ $product->stock }}
                                </span>

                                <form action="{{ route('cart.add', $product) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="inline-flex items-center gap-2 px-4 py-2.5 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition shadow-sm">
                                        <x-heroicon-o-shopping-cart class="w-4 h-4" />
                                        Add
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 sm:col-span-2 lg:col-span-4">
                        <div class="bg-white rounded-[24px] border border-slate-200 p-10 text-center text-slate-500">
                            No products available right now.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- PROMO --}}
    <section class="pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 bg-white rounded-[30px] overflow-hidden border border-orange-100 shadow-[0_18px_50px_rgba(15,23,42,0.08)]">
                <div class="p-8 sm:p-10 lg:p-12 flex flex-col justify-center">
                    <span class="text-orange-500 uppercase tracking-[0.22em] text-xs font-bold mb-3">Limited Offer</span>
                    <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 mb-4">
                        Get 30% Off on New Season Arrivals
                    </h2>
                    <p class="text-slate-500 text-sm sm:text-base leading-7 mb-8 max-w-lg">
                        Refresh your collection with high quality products crafted for style and comfort.
                    </p>
                    <div>
                        <a href="{{ route('shop') }}" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition">
                            Shop Collection
                            <x-heroicon-o-arrow-right class="w-5 h-5" />
                        </a>
                    </div>
                </div>

                <div class="min-h-[320px]">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=1200&q=80" alt="Promo" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- NEWSLETTER --}}
    <section class="pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-950 rounded-[30px] p-8 sm:p-10 lg:p-12 flex flex-col lg:flex-row gap-6 lg:items-center lg:justify-between shadow-[0_20px_60px_rgba(15,23,42,0.14)]">
                <div>
                    <span class="text-orange-400 uppercase tracking-[0.22em] text-xs font-bold">Stay Updated</span>
                    <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white mt-3">
                        Subscribe for Offers & News
                    </h2>
                </div>

                <form class="flex flex-col sm:flex-row gap-3 w-full lg:max-w-xl">
                    <div class="relative flex-1">
                        <x-heroicon-o-envelope class="w-5 h-5 text-slate-400 absolute left-4 top-1/2 -translate-y-1/2" />
                        <input type="email"
                               placeholder="Enter your email"
                               class="w-full pl-12 pr-5 py-3.5 rounded-full border border-white/10 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-200">
                    </div>
                    <button type="submit" class="px-7 py-3.5 rounded-full bg-orange-500 hover:bg-orange-600 text-white text-sm sm:text-base font-semibold transition shadow-lg shadow-orange-500/20">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-slate-950 text-slate-300 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <div>
                <h3 class="text-2xl font-black tracking-tight text-white mb-4">ShopWave</h3>
                <p class="text-slate-400 leading-7 text-sm sm:text-base">
                    Modern ecommerce UI for your Laravel project with Tailwind CSS, Heroicons, slider, and dynamic product cards.
                </p>
            </div>

            <div>
                <h4 class="text-base font-bold text-white mb-4">Quick Links</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                    <li><a href="{{ route('shop') }}" class="hover:text-white transition">Shop</a></li>
                    <li><a href="{{ route('deals') }}" class="hover:text-white transition">Deals</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-base font-bold text-white mb-4">Categories</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('shop') }}" class="hover:text-white transition">Fashion</a></li>
                    <li><a href="{{ route('shop') }}" class="hover:text-white transition">Shoes</a></li>
                    <li><a href="{{ route('shop') }}" class="hover:text-white transition">Bags</a></li>
                    <li><a href="{{ route('shop') }}" class="hover:text-white transition">Watches</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-base font-bold text-white mb-4">Contact</h4>
                <div class="space-y-3 text-slate-400 text-sm">
                    <p class="flex items-center gap-2">
                        <x-heroicon-o-envelope class="w-5 h-5" />
                        hello@shopwave.com
                    </p>
                    <p class="flex items-center gap-2">
                        <x-heroicon-o-phone class="w-5 h-5" />
                        +880 1234 567890
                    </p>
                    <p class="flex items-center gap-2">
                        <x-heroicon-o-map-pin class="w-5 h-5" />
                        Dhaka, Bangladesh
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const mobileToggle = document.getElementById('mobileToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileToggle?.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        const slides = document.querySelectorAll('.slide');
        const nextSlideBtn = document.getElementById('nextSlide');
        const prevSlideBtn = document.getElementById('prevSlide');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('opacity-0', 'pointer-events-none');
                    slide.classList.add('opacity-100');
                } else {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0', 'pointer-events-none');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        nextSlideBtn?.addEventListener('click', nextSlide);
        prevSlideBtn?.addEventListener('click', prevSlide);

        if (slides.length > 0) {
            setInterval(nextSlide, 5000);
        }
    </script>

@endsection