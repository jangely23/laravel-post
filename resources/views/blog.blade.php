@extends('template')

@section('content')
    <div>
        <h1>Blog</h1>

        @foreach ($posts as $post)
            <p>
                <strong>{{ $post->id }}</strong>
                <a href="{{ route('post', $post->slug )}}">
                    {{ $post->title }}
                </a>
            </p>
        @endforeach
    </div>

    <div>
        <p> {{ $posts->links() }} </p>
    </div>
   

@endsection