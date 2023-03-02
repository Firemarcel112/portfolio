<nav class="navigation w-full">
    <div class="flex justify-end flex-wrap">

        @php
            $navItems = [
                ['name' => 'home', 'url' => 'index'],
                ['name' => 'about', 'url' => 'index'],
                ['name' => 'projects', 'url' => 'index'],
                ['name' => 'statistics', 'url' => 'index'],
                ['name' => 'contact', 'url' => 'index'],
            ];
        @endphp

        @foreach($navItems as $arr=>$link)
            <a class="navLink text-sm font-bold" href="{{ $link['url'] }}">{{ strtoupper(__('navigation.' . $link['name'])) }}</a>
        @endforeach
    </div>

</nav>
