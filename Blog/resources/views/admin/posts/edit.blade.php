@extends('layouts.admin')

@section('title', 'Edit blog post')

@section('content')

    <h1>Edit post</h1>

    <a href="{{ route('admin.posts.index') }}">Back to list</a>

    {!! Form::model($post, [
        'route' => ['admin.posts.update', $post->id],
        'method'=> 'put'
    ]) !!}
    @include('admin.posts.form', ['btnText'=>'Edit post'])
    {!! Form::close() !!}

@endsection