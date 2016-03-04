@extends('layouts.frontend')

@section('title', 'Edit game: '.$quote->name)

@section('content')

        <!-- content -->
<div class="row">
    <!-- main content -->
    <div class="col-md-8 mainContent">
        {!! Form::model($quote, [
    'route' => ['quote.update', $quote->id],
    'method' => 'put'
]) !!}

        @include('quote.form', ['btnText'=>'Aanpassen'])

        {!! Form::close() !!}
    </div>
    <!-- end main content -->

    <!-- sidebar -->
    <div class="col-md-4 sidebar">
        <a href="{{ route('quote.index') }}" class="btn btn-info pull-right">Back to list</a>
    </div>
    <!-- end sidebar -->

</div>
<!-- end main content -->

@endsection