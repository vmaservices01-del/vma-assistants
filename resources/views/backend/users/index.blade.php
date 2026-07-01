@extends('backend.layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">User Management</h2>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="p-4 border-b">ID</th>
                <th class="p-4 border-b">Name</th>
                <th class="p-4 border-b">Email Address</th>
                <th class="p-4 border-b">Registered Date</th>
                <th class="p-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="hover:bg-gray-50 border-b">
                <td class="p-4">{{ $user->id }}</td>
                <td class="p-4 font-bold">{{ $user->name }}</td>
                <td class="p-4">{{ $user->email }}</td>
                <td class="p-4">{{ $user->created_at->format('M d, Y') }}</td>
                <td class="p-4 text-right">
                    <a href="{{ route('backend.users.edit', $user->id) }}" 
                       class="inline-flex items-center text-blue-600 hover:text-blue-900 transition-colors" 
                       title="Edit Profile">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="p-4">
        {{ $users->links() }}
    </div>
</div>
@endsection