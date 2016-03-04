@extends('layouts.admin')

@section('content')
    <h1>Please login</h1>
    {!! Form::open(['route'=>'auth.login']) !!}
    <ul>
        <li>
            {!! Form::label('email') !!}
            {!! Form::email('email') !!}
            {!! $errors->first('email', '<p class="error">:message</p>') !!}
        </li>
        <li>
            {!! Form::label('password') !!}
            {!! Form::password('password') !!}
            {!! $errors->first('password', '<p class="error">:message</p>') !!}
        </li>
        <li>
            {!! Form::submit('Login') !!}
        </li>
    </ul>
    {!! Form::close() !!}
@endsection