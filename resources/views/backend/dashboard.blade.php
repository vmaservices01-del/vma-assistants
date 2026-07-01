@extends('backend.layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Dashboard Summary</h1>
    
    <div class="grid grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-gray-500 text-lg">Total Pages</h3>
            <p class="text-4xl font-bold">{{ $stats['pages'] }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-gray-500 text-lg">Form Submissions</h3>
            <p class="text-4xl font-bold">{{ $stats['forms'] }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-gray-500 text-lg">Registered Users</h3>
            <p class="text-4xl font-bold">{{ $stats['users'] }}</p>
        </div>
    </div>
@endsection