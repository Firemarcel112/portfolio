@extends('layout.app', ["title" => "test"])

@section('content')
    <div class="aboutMe ml-16">
        <h1 class="text-4xl mb-4">{{ strtoupper(__('home.about')) }}</h1>
        <p class="text-2xl">{{ __('home.greeting') }}</p>
        <p class="text-xl">{{ __('home.informationAboutMe') }}</p>
    </div>

    <div class="recentProjects">
        @dd($fetch);
        <x-project name="Test" projectNr="1" summary="NOT" pathToImage="/"></x-project>
    </div>

@endsection
