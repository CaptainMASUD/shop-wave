@extends('layouts.app')

@section('title', 'Manage Products')

@section('content')
<section class="min-h-screen bg-slate-50">
    <div class="flex min-h-screen">
        @include('partials.admin-sidebar')

        <main class="flex-1 p-6 sm:p-8">
            <div class="w-full max-w-6xl mx-auto">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h1 class="text-3xl font-black text-slate-900">Products</h1>
                        <p class="text-slate-500 mt-2">Manage all shop products.</p>
                    </div>

                    <a href="{{ route('admin.products.create') }}"
                       class="inline-flex items-center justify-center px-5 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition">
                        Add Product
                    </a>
                </div>

                @if(session('success'))
                    <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white border border-slate-200 rounded-[28px] shadow-soft overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left">
                            <thead class="bg-slate-50 border-b border-slate-200">
                                <tr>
                                    <th class="px-6 py-4 font-bold text-slate-700">Name</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Category</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Price</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Stock</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Status</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    <tr class="border-b border-slate-100">
                                        <td class="px-6 py-4 font-semibold text-slate-900">{{ $product->name }}</td>
                                        <td class="px-6 py-4 text-slate-600">{{ $product->category ?? 'N/A' }}</td>
                                        <td class="px-6 py-4 text-slate-600">${{ number_format($product->price, 2) }}</td>
                                        <td class="px-6 py-4 text-slate-600">{{ $product->stock }}</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-semibold {{ $product->is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                                {{ $product->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <a href="{{ route('admin.products.edit', $product) }}"
                                                   class="inline-flex items-center justify-center px-4 py-2 rounded-full border border-slate-200 text-slate-700 text-xs font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                                    Edit
                                                </a>

                                                <form method="POST" action="{{ route('admin.products.destroy', $product) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            onclick="return confirm('Delete this product?')"
                                                            class="inline-flex items-center justify-center px-4 py-2 rounded-full border border-red-200 text-red-600 text-xs font-semibold hover:bg-red-50 transition">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-8 text-center text-slate-500">
                                            No products found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-6">
                    {{ $products->links() }}
                </div>
            </div>
        </main>
    </div>
</section>
@endsection