@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<section class="min-h-screen bg-slate-50">
    <div class="flex min-h-screen">
        @include('partials.admin-sidebar')

        <main class="flex-1 p-6 sm:p-8">
            <div class="w-full max-w-5xl mx-auto">
                <div class="mb-6">
                    <h1 class="text-3xl font-black text-slate-900">Create User</h1>
                    <p class="text-slate-500 mt-2">Add a new user or admin account.</p>
                </div>

                <div class="max-w-4xl mx-auto rounded-[28px] border border-slate-200 bg-white p-8 shadow-soft">
                    <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Role</label>
                            <select name="role" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                            <input type="password" name="password" placeholder="Password" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full rounded-full border border-slate-200 px-5 py-3.5">
                        </div>

                        <div class="flex items-center gap-3">
                            <button type="submit" class="px-8 py-3.5 rounded-full bg-orange-500 text-white font-semibold hover:bg-orange-600 transition">
                                Save User
                            </button>

                            <a href="{{ route('admin.users.index') }}" class="px-8 py-3.5 rounded-full border border-slate-200 text-slate-700 font-semibold hover:border-orange-300 hover:text-orange-500 transition">
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