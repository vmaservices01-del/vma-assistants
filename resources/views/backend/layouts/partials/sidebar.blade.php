<div class="h-full flex flex-col p-4 text-gray-300">
    <div class="text-white text-xl font-bold p-4 mb-6 border-b border-gray-800">CMS DASHBOARD</div>
    <nav class="space-y-2">
        @php 
            $links = [
                ['route' => 'dashboard', 'label' => 'Dashboard'],
                ['route' => 'backend.pages.index', 'label' => 'Pages & SEO'],
                ['route' => 'backend.blogs.index', 'label' => 'Posts'],
                ['route' => 'backend.media.index', 'label' => 'Media'],
                ['route' => 'backend.forms.index', 'label' => 'Form Submissions'],
                ['route' => 'backend.users.index', 'label' => 'Users'],
            ];
        @endphp
        
        @foreach($links as $link)
            <a href="{{ route($link['route']) }}" 
               class="flex items-center px-4 py-3 rounded-lg transition {{ request()->routeIs($link['route'] . '*') ? 'bg-blue-600 text-white' : 'hover:bg-gray-800' }}">
                {{ $link['label'] }}
            </a>
        @endforeach
    </nav>
</div>