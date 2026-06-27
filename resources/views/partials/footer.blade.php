<footer class="relative bg-[#052f1d] text-white overflow-hidden">
    <!-- Soft background decoration -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-24 -left-24 w-72 h-72 rounded-full bg-[#0b6f3a]/30 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 rounded-full bg-[#b08d3a]/20 blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8 md:pb-10">
        <!-- Top Footer -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 pb-12 border-b border-white/10">
            <!-- Brand -->
            <div class="lg:col-span-5">
                <a href="{{ route('home') }}" class="inline-flex items-center bg-white rounded-2xl px-4 py-3 shadow-lg shadow-black/10">
                    <img
                        src="{{ asset('logo/logo.png') }}"
                        alt="Verdéllo Textiles"
                        class="h-16 w-auto object-contain"
                        loading="lazy"
                    >
                </a>

                <p class="mt-6 max-w-md text-sm leading-7 text-white/70">
                    Crafting trends sustainably with globally sourced textile products.
                    Verdéllo Textiles brings quality, trust, and refined textile solutions
                    for modern customers.
                </p>

                <div class="mt-6 flex flex-wrap gap-3">
                    <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold text-white/80">
                        Sustainable Sourcing
                    </span>
                    <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold text-white/80">
                        Premium Textile
                    </span>
                    <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold text-white/80">
                        Global Standard
                    </span>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="lg:col-span-2">
                <h3 class="text-sm font-bold uppercase tracking-[0.18em] text-[#d5b15c]">
                    Quick Links
                </h3>

                <ul class="mt-5 space-y-3 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="text-white/70 hover:text-[#d5b15c] transition">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}" class="text-white/70 hover:text-[#d5b15c] transition">
                            Shop
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('deals') }}" class="text-white/70 hover:text-[#d5b15c] transition">
                            Deals
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-white/70 hover:text-[#d5b15c] transition">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Customer Support -->
            <div class="lg:col-span-2">
                <h3 class="text-sm font-bold uppercase tracking-[0.18em] text-[#d5b15c]">
                    Support
                </h3>

                <ul class="mt-5 space-y-3 text-sm">
                    @auth
                        <li>
                            <a href="{{ route('dashboard') }}" class="text-white/70 hover:text-[#d5b15c] transition">
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('orders.index') }}" class="text-white/70 hover:text-[#d5b15c] transition">
                                My Orders
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="text-white/70 hover:text-[#d5b15c] transition">
                                Login
                            </a>
                        </li>
                    @endauth

                    <li>
                        <a href="{{ route('cart.index') }}" class="text-white/70 hover:text-[#d5b15c] transition">
                            Cart
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-white/70 hover:text-[#d5b15c] transition">
                            Help Center
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="lg:col-span-3">
                <h3 class="text-sm font-bold uppercase tracking-[0.18em] text-[#d5b15c]">
                    Contact
                </h3>

                <div class="mt-5 space-y-4 text-sm text-white/70">
                    <p class="leading-6">
                        Have questions about products, orders, or sourcing?
                        Contact us anytime.
                    </p>

                    <a href="mailto:info@verdellotextiles.com" class="block hover:text-[#d5b15c] transition">
                        info@verdellotextiles.com
                    </a>

                    <a href="tel:+8801000000000" class="block hover:text-[#d5b15c] transition">
                        +880 1000-000000
                    </a>

                    <p>
                        Dhaka, Bangladesh
                    </p>
                </div>

                <div class="mt-6 flex items-center gap-3">
                    <a href="#"
                       aria-label="Facebook"
                       class="w-10 h-10 rounded-full border border-white/10 bg-white/5 hover:bg-[#d5b15c] hover:text-[#052f1d] transition flex items-center justify-center">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12.06C22 6.51 17.52 2 12 2S2 6.51 2 12.06c0 5.02 3.66 9.18 8.44 9.94v-7.03H7.9v-2.91h2.54V9.84c0-2.52 1.49-3.91 3.77-3.91 1.09 0 2.23.2 2.23.2v2.47h-1.26c-1.24 0-1.63.78-1.63 1.57v1.89h2.78l-.44 2.91h-2.34V22C18.34 21.24 22 17.08 22 12.06z"/>
                        </svg>
                    </a>

                    <a href="#"
                       aria-label="Instagram"
                       class="w-10 h-10 rounded-full border border-white/10 bg-white/5 hover:bg-[#d5b15c] hover:text-[#052f1d] transition flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                            <circle cx="12" cy="12" r="4"></circle>
                            <circle cx="17.5" cy="6.5" r="1"></circle>
                        </svg>
                    </a>

                    <a href="#"
                       aria-label="LinkedIn"
                       class="w-10 h-10 rounded-full border border-white/10 bg-white/5 hover:bg-[#d5b15c] hover:text-[#052f1d] transition flex items-center justify-center">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8h4V24h-4V8zm7.5 0h3.84v2.18h.05c.54-1.02 1.85-2.18 3.8-2.18 4.06 0 4.81 2.67 4.81 6.14V24h-4v-8.73c0-2.08-.04-4.75-2.89-4.75-2.9 0-3.34 2.26-3.34 4.6V24h-4V8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/55">
            <p>
                © {{ date('Y') }} Verdéllo Textiles. All rights reserved.
            </p>

            <div class="flex items-center gap-5">
                <a href="{{ route('contact') }}" class="hover:text-[#d5b15c] transition">
                    Privacy Policy
                </a>
                <a href="{{ route('contact') }}" class="hover:text-[#d5b15c] transition">
                    Terms & Conditions
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Space for fixed mobile bottom nav -->
<div class="h-16 md:hidden"></div>