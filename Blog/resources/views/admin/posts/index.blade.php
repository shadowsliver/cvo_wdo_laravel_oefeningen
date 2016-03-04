@extends('layouts.admin')

@section('title', 'Index')

@section('content')

    <h1>Posts</h1>

    <a href="{{ route('admin.posts.create') }}">Create new post</a>

    @if($posts->count())
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ route('admin.posts.edit', $post->id) }}">{{ $post->title }}</a>
                    {!! Form::open([
                        'route'=>['admin.posts.destroy', $post->id],
                        'method'=>'delete',
                        'class'=>'destroy'
                    ]) !!}
                    {!! Form::submit('Delete post') !!}
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

@endsection