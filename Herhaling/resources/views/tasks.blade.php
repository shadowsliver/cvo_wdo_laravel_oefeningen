@extends('layouts.app')

@section('content')

    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Task
            </div>

            @if(session('message'))
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
            @endif


            @if(count($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel-body">

                {!! Form::open(['route'=>'task.store','method'=>'post']) !!}


                <div class="form-group">

                    {!! Form::label('Task', 'Task', ['class'=>'control-label col-sm-3']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'New task']) !!}
                    </div>

                </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        {!! Form::submit('Add Task') !!}
                    </div>
                </div>

                {!! Form::close() !!}
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Tasks
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <th>Task</th>
                        <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>
                                    {{ $task->name }}
                                </td>
                                <td>
                                    {!! Form::open(['route'=>['task.destroy', $task->id] ,'method'=>'delete']) !!}

                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection