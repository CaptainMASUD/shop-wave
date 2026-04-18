@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<section class="min-h-screen bg-slate-50">
    <div class="flex min-h-screen">
        @include('partials.admin-sidebar')

        <main class="flex-1 p-6 sm:p-8">
            <div class="w-full max-w-5xl mx-auto">
                <div class="mb-6">
                    <h1 class="text-3xl font-black text-slate-900">Edit Product</h1>
                    <p class="text-slate-500 mt-2">Update product information.</p>
                </div>

                <div class="max-w-4xl mx-auto rounded-[28px] border border-slate-200 bg-white p-8 shadow-soft">
                    <form action="{{ route('admin.products.update', $product) }}" method="POST" class="space-y-5">
                        @csrf
                        @method('PUT')

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Product Name</label>
                            <input type="text" name="name" value="{{ old('name', $product->name) }}" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Category</label>
                            <input type="text" name="category" value="{{ old('category', $product->category) }}" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Image URL</label>
                            <input type="text" name="image" value="{{ old('image', $product->image) }}" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Description</label>
                            <textarea name="description" rows="5" class="w-full rounded-[24px] border border-slate-200 px-5 py-4">{{ old('description', $product->description) }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                            <input type="number" step="0.01" name="discount_price" value="{{ old('discount_price', $product->discount_price) }}" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                        </div>

                        <label class="flex items-center gap-3">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                            <span class="text-sm font-medium text-slate-700">Active Product</span>
                        </label>

                        <div class="flex items-center gap-3">
                            <button type="submit" class="px-8 py-3.5 rounded-full bg-orange-500 text-white font-semibold hover:bg-orange-600 transition">
                                Update Product
                            </button>

                            <a href="{{ route('admin.products.index') }}" class="px-8 py-3.5 rounded-full border border-slate-200 text-slate-700 font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</section>
@endsection