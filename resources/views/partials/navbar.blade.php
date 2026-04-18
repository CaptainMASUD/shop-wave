@php
    $cartCount = collect(session('cart', []))->sum('quantity');
@endphp

<header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <a href="{{ route('home') }}" class="text-2xl md:text-3xl font-extrabold tracking-tight">
                Shop<span class="text-orange-600">Wave</span>
            </a>

            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-700">
                <a href="{{ route('home') }}"
                   class="inline-flex items-center py-2.5 border-b-2 transition {{ request()->routeIs('home') ? 'text-orange-500 border-orange-500' : 'border-transparent hover:text-orange-500 hover:border-orange-500' }}">
                    Home
                </a>

                <a href="{{ route('shop') }}"
                   class="inline-flex items-center py-2.5 border-b-2 transition {{ request()->routeIs('shop') ? 'text-orange-500 border-orange-500' : 'border-transparent hover:text-orange-500 hover:border-orange-500' }}">
                    Shop
                </a>

                <a href="{{ route('deals') }}"
                   class="inline-flex items-center py-2.5 border-b-2 transition {{ request()->routeIs('deals') ? 'text-orange-500 border-orange-500' : 'border-transparent hover:text-orange-500 hover:border-orange-500' }}">
                    Deals
                </a>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center py-2.5 border-b-2 transition {{ request()->routeIs('contact') ? 'text-orange-500 border-orange-500' : 'border-transparent hover:text-orange-500 hover:border-orange-500' }}">
                    Contact
                </a>
            </nav>

            <div class="hidden md:flex items-center gap-3">
                <a href="{{ route('cart.index') }}"
                   class="relative w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 transition flex items-center justify-center">
                    <x-heroicon-o-shopping-cart class="w-5 h-5 text-slate-700" />
                    <span class="absolute -top-1 -right-1 min-w-[20px] h-5 px-1 rounded-full bg-orange-600 text-white text-[10px] font-bold flex items-center justify-center">
                        {{ $cartCount }}
                    </span>
                </a>

                @guest
                    <a href="{{ route('login') }}"
                       class="inline-flex items-center justify-center px-5 py-2.5 rounded-full bg-orange-500 text-white text-sm font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition">
                        Login
                    </a>
                @endguest

                @auth
                    <div x-data="{ open: false }" class="relative">
                        <button
                            @click="open = !open"
                            type="button"
                            class="flex items-center gap-3 px-3 py-2 rounded-full border border-slate-200 bg-white hover:border-orange-300 transition"
                        >
                            <div class="w-10 h-10 rounded-full bg-orange-500 text-white flex items-center justify-center font-bold uppercase">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>

                            <div class="text-left">
                                <p class="text-sm font-semibold text-slate-800 leading-none">
                                    {{ auth()->user()->name }}
                                </p>
                            </div>

                            <svg
                                class="w-4 h-4 text-slate-500 transition-transform"
                                :class="open ? 'rotate-180' : ''"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div
                            x-show="open"
                            x-cloak
                            @click.away="open = false"
                            x-transition
                            class="absolute right-0 mt-3 w-56 rounded-2xl bg-white border border-slate-200 shadow-xl overflow-hidden z-50"
                        >
                            <div class="px-4 py-3 border-b border-slate-100">
                                <p class="text-sm font-semibold text-slate-800">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-slate-500">{{ auth()->user()->email }}</p>
                            </div>

                            <a href="{{ route('cart.index') }}"
                               class="block px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50 hover:text-orange-500 transition">
                                Cart ({{ $cartCount }})
                            </a>

                            @if(auth()->user()->role === 'admin')
                                <a href="{{ route('admin.products.index') }}"
                                   class="block px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50 hover:text-orange-500 transition">
                                    Admin Dashboard
                                </a>
                            @else
                                <a href="{{ route('dashboard') }}"
                                   class="block px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50 hover:text-orange-500 transition">
                                    My Dashboard
                                </a>

                                <a href="{{ route('orders.index') }}"
                                   class="block px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50 hover:text-orange-500 transition">
                                    My Orders
                                </a>
                            @endif

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="w-full text-left px-4 py-3 text-sm font-medium text-slate-700 hover:bg-red-50 hover:text-red-500 transition">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>

            <button id="mobileToggle" class="md:hidden p-2 text-slate-700">
                <x-heroicon-o-bars-3 class="w-7 h-7" />
            </button>
        </div>

        <div id="mobileMenu" class="hidden md:hidden pb-4">
            <div class="flex flex-col gap-3 text-sm font-semibold text-slate-700">
                <a href="{{ route('home') }}" class="py-2 border-b border-slate-200">Home</a>
                <a href="{{ route('shop') }}" class="py-2 border-b border-slate-200">Shop</a>
                <a href="{{ route('deals') }}" class="py-2 border-b border-slate-200">Deals</a>
                <a href="{{ route('contact') }}" class="py-2 border-b border-slate-200">Contact</a>
            </div>

            <div class="flex items-center gap-3 mt-4">
                <a href="{{ route('cart.index') }}"
                   class="relative w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 transition flex items-center justify-center">
                    <x-heroicon-o-shopping-cart class="w-5 h-5 text-slate-700" />
                    <span class="absolute -top-1 -right-1 min-w-[20px] h-5 px-1 rounded-full bg-orange-600 text-white text-[10px] font-bold flex items-center justify-center">
                        {{ $cartCount }}
                    </span>
                </a>
            </div>

            <div class="flex flex-col gap-3 mt-4">
                @guest
                    <a href="{{ route('login') }}"
                       class="inline-flex items-center justify-center px-5 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition">
                        Login
                    </a>
                @endguest

                @auth
                    <div class="rounded-2xl border border-slate-200 bg-white p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-orange-500 text-white flex items-center justify-center font-bold uppercase">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-slate-800">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-slate-500">{{ auth()->user()->email }}</p>
                            </div>
                        </div>

                        <div class="mt-4 flex flex-col gap-2">
                            <a href="{{ route('cart.index') }}"
                               class="inline-flex items-center justify-center px-5 py-3 rounded-full border border-slate-200 text-slate-700 text-sm font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                Cart ({{ $cartCount }})
                            </a>

                            @if(auth()->user()->role === 'admin')
                                <a href="{{ route('admin.products.index') }}"
                                   class="inline-flex items-center justify-center px-5 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition">
                                    Admin Dashboard
                                </a>
                            @else
                                <a href="{{ route('dashboard') }}"
                                   class="inline-flex items-center justify-center px-5 py-3 rounded-full border border-slate-200 text-slate-700 text-sm font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                    My Dashboard
                                </a>

                                <a href="{{ route('orders.index') }}"
                                   class="inline-flex items-center justify-center px-5 py-3 rounded-full border border-slate-200 text-slate-700 text-sm font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                    My Orders
                                </a>
                            @endif

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="w-full inline-flex items-center justify-center px-5 py-3 rounded-full border border-slate-200 bg-white text-slate-700 text-sm font-semibold hover:border-red-300 hover:text-red-500 transition">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</header>

<script>
    const mobileToggle = document.getElementById('mobileToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileToggle?.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>