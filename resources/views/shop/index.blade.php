@extends('layouts.app')

@section('title', 'Shop')

@section('content')

    {{-- TOP BANNER --}}
    <section class="pt-6 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-[28px] shadow-soft border border-slate-200 bg-white">
                <img 
                    src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1600&q=80" 
                    alt="Shop Banner" 
                    class="w-full h-[220px] sm:h-[280px] lg:h-[340px] object-cover"
                >
            </div>
        </div>
    </section>

    {{-- SHOP SECTION --}}
    <section class="pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

                {{-- FILTER SIDEBAR --}}
                <aside class="lg:col-span-1">
                    <form method="GET" action="{{ route('shop') }}" class="bg-white border border-slate-200 rounded-[24px] p-6 shadow-soft sticky top-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-extrabold text-slate-900">Filters</h2>
                            <a href="{{ route('shop') }}" class="text-sm font-semibold text-orange-500 hover:text-orange-600 transition">
                                Reset
                            </a>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wide mb-4">Category</h3>
                            <div class="space-y-3">
                                @forelse($categories as $category)
                                    <label class="flex items-center gap-3 cursor-pointer">
                                        <input
                                            type="radio"
                                            name="category"
                                            value="{{ $category }}"
                                            class="w-4 h-4 border-slate-300 text-orange-500 focus:ring-orange-200"
                                            {{ request('category') === $category ? 'checked' : '' }}
                                        >
                                        <span class="text-sm text-slate-700 font-medium">{{ $category }}</span>
                                    </label>
                                @empty
                                    <p class="text-sm text-slate-500">No categories available.</p>
                                @endforelse
                            </div>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wide mb-4">Price Range</h3>
                            <div class="space-y-3">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="radio" name="price" value="0-1000" class="w-4 h-4 border-slate-300 text-orange-500 focus:ring-orange-200" {{ request('price') === '0-1000' ? 'checked' : '' }}>
                                    <span class="text-sm text-slate-700 font-medium">Tk 0 - Tk 1,000</span>
                                </label>

                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="radio" name="price" value="1000-3000" class="w-4 h-4 border-slate-300 text-orange-500 focus:ring-orange-200" {{ request('price') === '1000-3000' ? 'checked' : '' }}>
                                    <span class="text-sm text-slate-700 font-medium">Tk 1,000 - Tk 3,000</span>
                                </label>

                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="radio" name="price" value="3000-6000" class="w-4 h-4 border-slate-300 text-orange-500 focus:ring-orange-200" {{ request('price') === '3000-6000' ? 'checked' : '' }}>
                                    <span class="text-sm text-slate-700 font-medium">Tk 3,000 - Tk 6,000</span>
                                </label>

                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="radio" name="price" value="6000+" class="w-4 h-4 border-slate-300 text-orange-500 focus:ring-orange-200" {{ request('price') === '6000+' ? 'checked' : '' }}>
                                    <span class="text-sm text-slate-700 font-medium">Tk 6,000+</span>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="w-full px-5 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                            Apply Filters
                        </button>
                    </form>
                </aside>

                {{-- PRODUCTS --}}
                <div class="lg:col-span-3">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Shop Products</h2>
                            <p class="text-sm text-slate-500 mt-1">Showing {{ $products->total() }} products</p>
                        </div>

                        <form method="GET" action="{{ route('shop') }}" class="flex items-center gap-3">
                            @if(request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif

                            @if(request('price'))
                                <input type="hidden" name="price" value="{{ request('price') }}">
                            @endif

                            <span class="text-sm font-semibold text-slate-600">Sort by</span>
                            <select name="sort" onchange="this.form.submit()" class="px-4 py-3 rounded-full border border-slate-200 bg-white text-sm font-medium text-slate-700 focus:outline-none focus:ring-4 focus:ring-orange-100">
                                <option value="newest" {{ request('sort') === 'newest' ? 'selected' : '' }}>Newest</option>
                                <option value="price_low" {{ request('sort') === 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                                <option value="price_high" {{ request('sort') === 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                                <option value="oldest" {{ request('sort') === 'oldest' ? 'selected' : '' }}>Oldest</option>
                            </select>
                        </form>
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

                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                        @forelse($products as $product)
                            <div class="bg-white rounded-[24px] overflow-hidden border border-slate-200 shadow-soft hover:-translate-y-1 transition duration-300">
                                <div class="h-64 overflow-hidden relative">
                                    <img
                                        src="{{ $product->image ?: 'https://via.placeholder.com/600x600?text=Product' }}"
                                        alt="{{ $product->name }}"
                                        class="w-full h-full object-cover hover:scale-105 transition duration-500"
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

                                    <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $product->name }}</h3>

                                    <div class="flex items-center gap-2 mb-4">
                                        @if($product->discount_price)
                                            <span class="text-xl font-extrabold text-slate-900">
                                                Tk {{ number_format($product->discount_price, 2) }}
                                            </span>
                                            <span class="text-sm text-slate-400 line-through font-medium">
                                                Tk {{ number_format($product->price, 2) }}
                                            </span>
                                        @else
                                            <span class="text-xl font-extrabold text-slate-900">
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
                                            <button type="submit" class="px-4 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="sm:col-span-2 xl:col-span-3">
                                <div class="bg-white rounded-[24px] border border-slate-200 p-10 text-center text-slate-500 shadow-soft">
                                    No products found with the selected filters.
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <div class="mt-8">
                        {{ $products->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection