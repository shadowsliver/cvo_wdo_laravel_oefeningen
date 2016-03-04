@extends('layouts.frontend')

@section('title', 'Home')

@section('content')

    <div class="col-md-8 mainContent">

        @if($quotes->isEmpty())
            <p>There are no quotes! :(</p>
            @else
                    <!-- repeat blockquotes from database -->
            @foreach($quotes as $quote)
                <blockquote>
                    <p>
                        {{ $quote->quote }}
                    </p>
                    <footer>
                        As told by
                        <cite title="Source Title">{{ $quote->name }}</cite>
                    </footer>
                    <div class="editLinks">
                        <a href="{{ route('quote.edit', $quote->id) }}"> <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="{{ route('quote.delete', $quote->id) }}"> <i class="glyphicon glyphicon-remove"></i>
                        </a>


                    </div>
                </blockquote>
                @endforeach

                @endif
                        <!-- end repeat blockquotes -->
    </div>
    <!-- end main content -->

    <!-- sidebar -->
    <div class="col-md-4 sidebar">
        <h2>Add quote</h2>

        {!! Form::model($quotes, [
        'route' => ['quote.create'],
        'method' => 'post'
    ]) !!}

        @include('quote.form', ['btnText'=>'Toevoegen', 'class'=>'btn btn-success form-control'])

        {!! Form::close() !!}
    </div>
    <!-- end sidebar -->

    </div>

@endsection