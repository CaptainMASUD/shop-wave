@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <section class="min-h-screen bg-gradient-to-b from-orange-50 via-white to-white py-14 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 items-center">

                {{-- LEFT CONTENT --}}
                <div>
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-600 text-sm font-semibold mb-4">
                        Create Account
                    </span>

                    <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900 leading-tight">
                        Join Our Shop Today
                    </h1>

                    <p class="mt-4 max-w-xl text-slate-500 text-base sm:text-lg leading-8 font-medium">
                        Create your account to start shopping, track orders, and enjoy exclusive deals and updates.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-4 bg-white border border-slate-200 rounded-[24px] p-5 shadow-soft">
                            <div class="w-12 h-12 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center shrink-0">
                                <x-heroicon-o-user-plus class="w-6 h-6" />
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900">Quick Registration</h3>
                                <p class="text-sm text-slate-500 leading-7 mt-1">
                                    Sign up in seconds and get access to your shopping dashboard.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 bg-white border border-slate-200 rounded-[24px] p-5 shadow-soft">
                            <div class="w-12 h-12 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center shrink-0">
                                <x-heroicon-o-gift class="w-6 h-6" />
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900">Exclusive Benefits</h3>
                                <p class="text-sm text-slate-500 leading-7 mt-1">
                                    Get access to deals, order updates, and a smoother shopping experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- REGISTER FORM --}}
                <div class="bg-white border border-slate-200 rounded-[28px] p-6 sm:p-8 shadow-soft">
                    <div class="mb-6">
                        <span class="text-orange-500 uppercase tracking-[0.22em] text-xs font-bold">Register</span>
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 mt-3">
                            Create Account
                        </h2>
                        <p class="text-slate-500 text-sm sm:text-base mt-3 leading-7">
                            Fill in your details below to create your new account.
                        </p>
                    </div>

                    <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
                        @csrf

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Enter your full name"
                                class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                            >
                            @error('name')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Enter your email"
                                class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                            >
                            @error('email')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                            <input
                                type="password"
                                name="password"
                                placeholder="Enter password"
                                class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                            >
                            @error('password')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Confirm Password</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                placeholder="Confirm password"
                                class="w-full px-5 py-3.5 rounded-full border border-slate-200 bg-white text-slate-900 outline-none focus:ring-4 focus:ring-orange-100 focus:border-orange-300"
                            >
                        </div>

                        <button
                            type="submit"
                            class="w-full inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-orange-500 text-white text-sm sm:text-base font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition"
                        >
                            Create Account
                        </button>

                        <p class="text-sm text-slate-500 text-center">
                            Already have an account?
                            <a href="{{ route('login') }}" class="font-semibold text-orange-500 hover:text-orange-600">
                                Login here
                            </a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection