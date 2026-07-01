@extends('backend.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <!-- Breadcrumb -->
        <a href="{{ route('backend.users.index') }}" class="text-sm text-gray-500 hover:text-gray-900 mb-6 flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"></path></svg>
            Back to Users
        </a>

        <!-- Edit Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Edit Profile</h2>

            <form action="{{ route('backend.users.update', $user->id) }}" method="POST" class="space-y-6">
                @csrf @method('PUT')

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" 
                           class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" 
                           class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mt-6 border-t pt-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Security Settings</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">New Password</label>
                            <input type="password" name="password" placeholder="Leave blank to keep current"
                                   class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="Repeat new password"
                                   class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 mt-2">Only fill these if you wish to change the user's password.</p>
                </div>

                <div class="pt-4 flex items-center justify-end gap-3">
                    <a href="{{ route('backend.users.index') }}" class="px-4 py-2 text-gray-600 hover:text-gray-800">Cancel</a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection