<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased">

    <!-- Mobile Menu Button (Visible only on mobile) -->
    <div class="lg:hidden p-4 bg-gray-900 flex justify-between items-center text-white">
        <span class="font-bold">Admin Panel</span>
        <button onclick="document.getElementById('sidebar').classList.toggle('hidden')" class="p-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
    </div>

    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar" class="hidden lg:block w-64 bg-gray-900 min-h-screen fixed lg:static z-20 transition-all">
            @include('backend.layouts.partials.sidebar')
        </div>

        <!-- Content -->
        <div class="flex-1 flex flex-col min-h-screen">
            @include('backend.layouts.partials.header')
            
            <main class="p-6 lg:p-8 flex-1 overflow-x-hidden">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-500 text-white rounded-lg shadow-sm">{{ session('success') }}</div>
                @endif
                @yield('content')
               
            </main>

            @include('backend.layouts.partials.footer')
        </div>
    </div>
     @stack('scripts')
</body>
</html>