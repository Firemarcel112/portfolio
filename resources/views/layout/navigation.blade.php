<nav class="navigation w-full">
    <div class="flex justify-end flex-wrap">

        @php
            $navItems = [
                ['name' => 'Startseite', 'url' => "test"],
                ['name' => 'Über mich', 'url' => "test"],
                ['name' => 'Projekte', 'url' => "test"],
                ['name' => 'Statistiken', 'url' => "test"],
                ['name' => 'Kontakt', 'url' => "test"],
            ];
        @endphp

        @foreach($navItems as $arr=>$link)
            <a class="navLink text-sm font-bold" href="{{ $link['url'] }}">{{ strtoupper($link['name']) }}</a>
        @endforeach
    </div>

</nav>
