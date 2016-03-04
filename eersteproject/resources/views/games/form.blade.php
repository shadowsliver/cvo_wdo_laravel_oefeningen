@include('shared.errors')

<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('publisher') !!}
    {!! Form::text('publisher', null, ['class'=>'form-control']) !!}
</div>

<div class="checkbox">
    <label>
        {!! Form::checkbox('complete') !!} Complete?
    </label>
</div>

{!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
<a href=" {{ url()->previous() }}" class="btn btn-link">Cancel</a>