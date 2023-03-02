<header class="flex items-center">

    <div class="about flex items-center mx-auto">
        <figure>
            <img src="{{ asset('profile.png') }}" class="w-48 h-48 rounded-full mr-5" alt="{{ __('header.logoname') }}">
        </figure>

        <div class="content">
            <h2 class="text-6xl mb-6 font-bold">{{ __('header.greeting') }}</h2>
            <div class="subcontent flex items-center">
                <p class="text-xl">{{ strtoupper(__('header.connect')) }}</p>
                <i class="fa-solid fa-chevron-right text-2xl mx-2 text-yellow-500"></i>
                <a target="_blank" href="{{ __('links.github') }}"><i class="fa-brands fa-github"></i></a>
                <a target="_blank" href="{{ __('links.linkedin') }}"><i class="fa-brands fa-linkedin" style="color:#0077B5"></i></a>
                <a target="_blank" href="{{ __('links.discord') }}" style="color: #738ADB"><i class="fa-brands fa-discord"></i></a>
            </div>

        </div>

    </div>

</header>
