<header class="bg-white shadow-sm py-4 px-6 flex justify-between items-center border-b border-gray-200">
    <h1 class="text-xl font-semibold text-gray-800">Overview</h1>
    <div class="flex items-center gap-4">
        <span class="text-sm text-gray-600 hidden md:inline">{{ auth()->user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-sm text-red-600 hover:text-red-800 font-medium">Logout</button>
        </form>
    </div>
</header>