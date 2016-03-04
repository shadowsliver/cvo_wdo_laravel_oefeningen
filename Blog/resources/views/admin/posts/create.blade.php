@extends('layouts.admin')

@section('title', 'New blog post')

@section('content')

    <h1>Create post</h1>

    <a href="{{ route('admin.posts.index') }}">Back to list</a>

    {!! Form::open(['route'=>'admin.posts.store']) !!}
    @include('admin.posts.form', ['btnText'=>'Create post'])
    {!! Form::close() !!}

@endsection