@extends('layouts.app')

@section('title', 'Manage Users')

@section('content')
<section class="min-h-screen bg-slate-50">
    <div class="flex min-h-screen">
        @include('partials.admin-sidebar')

        <main class="flex-1 p-6 sm:p-8">
            <div class="w-full max-w-6xl mx-auto">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h1 class="text-3xl font-black text-slate-900">Users</h1>
                        <p class="text-slate-500 mt-2">Manage all registered users.</p>
                    </div>

                    <a href="{{ route('admin.users.create') }}"
                       class="inline-flex items-center justify-center px-5 py-3 rounded-full bg-orange-500 text-white text-sm font-semibold shadow-lg shadow-orange-500/20 hover:bg-orange-600 transition">
                        Add User
                    </a>
                </div>

                <div class="bg-white border border-slate-200 rounded-[28px] shadow-soft overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left">
                            <thead class="bg-slate-50 border-b border-slate-200">
                                <tr>
                                    <th class="px-6 py-4 font-bold text-slate-700">Name</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Email</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Role</th>
                                    <th class="px-6 py-4 font-bold text-slate-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr class="border-b border-slate-100">
                                        <td class="px-6 py-4 font-semibold text-slate-900">{{ $user->name }}</td>
                                        <td class="px-6 py-4 text-slate-600">{{ $user->email }}</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex px-3 py-1 rounded-full text-xs font-semibold {{ $user->role === 'admin' ? 'bg-orange-100 text-orange-700' : 'bg-slate-100 text-slate-700' }}">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <a href="{{ route('admin.users.edit', $user) }}"
                                                   class="inline-flex items-center justify-center px-4 py-2 rounded-full border border-slate-200 text-slate-700 text-xs font-semibold hover:border-orange-300 hover:text-orange-500 transition">
                                                    Edit
                                                </a>

                                                <form method="POST" action="{{ route('admin.users.destroy', $user) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            onclick="return confirm('Delete this user?')"
                                                            class="inline-flex items-center justify-center px-4 py-2 rounded-full border border-red-200 text-red-600 text-xs font-semibold hover:bg-red-50 transition">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-8 text-center text-slate-500">
                                            No users found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-6">
                    {{ $users->links() }}
                </div>
            </div>
        </main>
    </div>
</section>
@endsection