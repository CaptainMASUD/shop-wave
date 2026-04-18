@extends('layouts.app')

@section('title', 'My Dashboard')

@section('content')
<section class="min-h-screen bg-slate-50">
    <div class="flex min-h-screen">
        @include('partials.user-sidebar')

        <main class="flex-1 p-6 sm:p-8">
            <div class="w-full max-w-6xl mx-auto">
                <div class="mb-6">
                    <h1 class="text-3xl font-black text-slate-900">My Dashboard</h1>
                    <p class="text-slate-500 mt-2">Manage your profile and view your own orders.</p>
                </div>

                @if(session('success'))
                    <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-6 rounded-2xl bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                    <div class="xl:col-span-1 space-y-6">
                        <div class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-soft">
                            <h2 class="text-2xl font-black text-slate-900 mb-5">Profile Info</h2>

                            <div class="space-y-4">
                                <div class="rounded-[24px] bg-slate-50 border border-slate-200 p-4">
                                    <p class="text-xs uppercase tracking-[0.18em] text-slate-400 font-bold">Name</p>
                                    <p class="text-sm text-slate-700 font-medium mt-2">{{ $user->name }}</p>
                                </div>

                                <div class="rounded-[24px] bg-slate-50 border border-slate-200 p-4">
                                    <p class="text-xs uppercase tracking-[0.18em] text-slate-400 font-bold">Email</p>
                                    <p class="text-sm text-slate-700 font-medium mt-2">{{ $user->email }}</p>
                                </div>

                                <div class="rounded-[24px] bg-slate-50 border border-slate-200 p-4">
                                    <p class="text-xs uppercase tracking-[0.18em] text-slate-400 font-bold">Role</p>
                                    <p class="text-sm text-slate-700 font-medium mt-2">{{ ucfirst($user->role) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-soft">
                            <h2 class="text-2xl font-black text-slate-900 mb-5">Update Profile</h2>

                            <form action="{{ route('profile.update') }}" method="POST" class="space-y-5">
                                @csrf
                                @method('PUT')

                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Name</label>
                                    <input
                                        type="text"
                                        name="name"
                                        value="{{ old('name', $user->name) }}"
                                        class="w-full rounded-full border border-slate-200 px-5 py-3.5 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                                    >
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        value="{{ old('email', $user->email) }}"
                                        class="w-full rounded-full border border-slate-200 px-5 py-3.5 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                                    >
                                </div>

                                <button
                                    type="submit"
                                    class="px-8 py-3.5 rounded-full bg-orange-500 text-white font-semibold hover:bg-orange-600 transition">
                                    Update Profile
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="xl:col-span-2">
                        <div class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-soft">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <h2 class="text-2xl font-black text-slate-900">My Recent Orders</h2>
                                    <p class="text-slate-500 mt-2">These are only your own orders.</p>
                                </div>

                                <a href="{{ route('orders.index') }}"
                                   class="px-6 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                                    View All Orders
                                </a>
                            </div>

                            @if($orders->count())
                                <div class="space-y-4">
                                    @foreach($orders as $order)
                                        <div class="rounded-[24px] border border-slate-200 bg-slate-50 p-5">
                                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                                <div>
                                                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-orange-100 text-orange-600 text-xs font-bold mb-3">
                                                        Order #{{ $order->id }}
                                                    </span>

                                                    <h3 class="text-xl font-black text-slate-900">
                                                        {{ ucfirst($order->status) }}
                                                    </h3>

                                                    <p class="text-sm text-slate-500 mt-2">
                                                        {{ $order->created_at->format('d M Y, h:i A') }}
                                                    </p>
                                                </div>

                                                <div class="text-left sm:text-right">
                                                    <p class="text-xs uppercase tracking-[0.18em] text-slate-400 font-bold">Total</p>
                                                    <p class="text-2xl font-black text-slate-900 mt-1">
                                                        Tk {{ number_format($order->total_amount, 2) }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="mt-5">
                                                <a href="{{ route('orders.show', $order) }}"
                                                   class="inline-flex items-center justify-center px-6 py-3 rounded-full border border-slate-200 text-slate-700 text-sm font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                                    View Order
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-6">
                                    {{ $orders->links() }}
                                </div>
                            @else
                                <div class="rounded-[24px] border border-slate-200 bg-slate-50 p-10 text-center">
                                    <h3 class="text-2xl font-black text-slate-900">No Orders Yet</h3>
                                    <p class="text-slate-500 mt-3">You have not placed any orders yet.</p>

                                    <a href="{{ route('shop') }}"
                                       class="mt-6 inline-flex items-center justify-center px-6 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold hover:bg-orange-600 transition">
                                        Start Shopping
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>
@endsection