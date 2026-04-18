@extends('layouts.app')

@section('title', 'Edit Order')

@section('content')
<section class="min-h-screen bg-slate-50">
    <div class="flex min-h-screen">
        @include('partials.admin-sidebar')

        <main class="flex-1 p-6 sm:p-8">
            <div class="w-full max-w-5xl mx-auto">
                <div class="mb-6">
                    <h1 class="text-3xl font-black text-slate-900">Edit Order</h1>
                    <p class="text-slate-500 mt-2">Update order status and customer delivery details.</p>
                </div>

                <div class="max-w-4xl mx-auto rounded-[28px] border border-slate-200 bg-white p-8 shadow-soft">
                    <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="space-y-5">
                        @csrf
                        @method('PUT')

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Order ID</label>
                            <input type="text"
                                   value="#{{ $order->id }}"
                                   disabled
                                   class="w-full rounded-full border border-slate-200 bg-slate-50 px-5 py-3.5 text-slate-500">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Customer</label>
                            <input type="text"
                                   value="{{ $order->user->name ?? 'N/A' }} - {{ $order->user->email ?? '' }}"
                                   disabled
                                   class="w-full rounded-full border border-slate-200 bg-slate-50 px-5 py-3.5 text-slate-500">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Order Status</label>
                            <select name="status"
                                    class="w-full rounded-full border border-slate-200 px-5 py-3.5 bg-white text-slate-900">
                                @foreach($statuses as $status)
                                    <option value="{{ $status }}" {{ old('status', $order->status) === $status ? 'selected' : '' }}>
                                        {{ ucfirst($status) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('status')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Phone</label>
                            <input type="text"
                                   name="phone"
                                   value="{{ old('phone', $order->phone) }}"
                                   class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                            @error('phone')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Shipping Address</label>
                            <textarea name="shipping_address"
                                      rows="5"
                                      class="w-full rounded-[24px] border border-slate-200 px-5 py-4">{{ old('shipping_address', $order->shipping_address) }}</textarea>
                            @error('shipping_address')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center gap-3 flex-wrap">
                            <button type="submit"
                                    class="px-8 py-3.5 rounded-full bg-orange-500 text-white font-semibold hover:bg-orange-600 transition">
                                Update Order
                            </button>

                            <a href="{{ route('admin.orders.show', $order) }}"
                               class="px-8 py-3.5 rounded-full border border-slate-200 text-slate-700 font-semibold hover:border-orange-300 hover:text-orange-500 transition">
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