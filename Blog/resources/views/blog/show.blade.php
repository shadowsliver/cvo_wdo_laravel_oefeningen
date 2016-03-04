@extends('layouts.frontend')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p class="created_at">
        Created on {{ $post->created_at->format('Y-m-d') }}
        by <strong>{{ $post->user->name }}</strong>
    </p>
    <p>
        {{ $post->body }}
    </p>
    <p><a href="{{ route('blog.index') }}">Back to list</a></p>
@endsection