@extends('template')

@section('content')

<div class="bg-sky-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
    <h1 class="text-5xl text-white text-center mb-8">{{ $post->title }}</h1>
    <img src="{{ asset('images/dev.png') }}" class="absolute -right-20 -bottom-20 opacity-20">
</div>

<div class="max-w-3xl mx-auto">

    <p class="leading-loose text-lg text-gray-700 mb-8"> {{ $post->body }} </p>

    <div class="flex justify-between items-center">
        <span class="text-md text-orange-500"> Elaborado por {{$post->user->name}} </span>
        <a href="{{ route('home') }}" class="text-sm text-indigo-600"> Volver </a>
    </div>
</div>


@endsection
