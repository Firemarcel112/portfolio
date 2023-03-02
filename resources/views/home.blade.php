@extends('layout.app', ["title" => "test"])

@section('content')
    <div class="aboutMe ml-16">
        <h1 class="text-4xl mb-4">{{ strtoupper(__('home.about')) }}</h1>
        <p class="text-2xl">{{ __('home.greeting') }}</p>
    </div>

@endsection
