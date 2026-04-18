<aside class="w-full lg:w-72 bg-slate-950 text-white min-h-screen">
    <div class="px-6 py-6 border-b border-white/10">
        <a href="{{ route('home') }}" class="text-2xl font-extrabold tracking-tight">
            Shop<span class="text-orange-500">Wave</span>
        </a>
        <p class="text-slate-400 text-sm mt-2">
            Admin Dashboard
        </p>
    </div>

    <div class="px-4 py-6">
        <p class="text-xs font-bold uppercase tracking-[0.22em] text-slate-500 mb-4 px-3">
            Management
        </p>

        <nav class="space-y-2">
            <a href="{{ route('admin.products.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold transition {{ request()->routeIs('admin.products.*') ? 'bg-orange-500 text-white shadow-lg shadow-orange-500/20' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                <x-heroicon-o-cube class="w-5 h-5" />
                <span>Products</span>
            </a>

            <a href="{{ route('admin.users.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold transition {{ request()->routeIs('admin.users.*') ? 'bg-orange-500 text-white shadow-lg shadow-orange-500/20' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                <x-heroicon-o-users class="w-5 h-5" />
                <span>Users</span>
            </a>

            <a href="{{ route('admin.orders.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold transition {{ request()->routeIs('admin.orders.*') ? 'bg-orange-500 text-white shadow-lg shadow-orange-500/20' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                <x-heroicon-o-shopping-bag class="w-5 h-5" />
                <span>Orders</span>
            </a>
        </nav>

        <p class="text-xs font-bold uppercase tracking-[0.22em] text-slate-500 mt-8 mb-4 px-3">
            Account
        </p>

        <nav class="space-y-2">
            <a href="{{ route('home') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-slate-300 hover:bg-white/5 hover:text-white transition">
                <x-heroicon-o-home class="w-5 h-5" />
                <span>Back to Website</span>
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold text-slate-300 hover:bg-red-500/10 hover:text-red-400 transition">
                    <x-heroicon-o-arrow-right-on-rectangle class="w-5 h-5" />
                    <span>Logout</span>
                </button>
            </form>
        </nav>
    </div>
</aside>