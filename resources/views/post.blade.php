@extends('template')

@section('content')

<div class="max-w-3xl mx-auto">

    <h1 class="text-5xl mb-8"> {{ $post->title }} </h1>

    <p class="leading-loose text-lg text-gray-700"> {{ $post->body }} </p>

    <div class="flex justify-between items-center mt-6">
        <span class="text-sm text-gray-600"> <strong> Elaborado por: </strong> {{$post->user->name}} </span>
        <a href="{{ route('home') }}" class="text-sm text-indigo-600"> Volver </a>
    </div>
</div>


@endsection
