<div class="form-group">
    {!! Form::label('name') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    {!! $errors->first('name', '<span class="form-error">Name is required</span>') !!}
</div>

<div class="form-group">
    {!! Form::label('quote') !!}
    {!! Form::textarea('quote', null, ['class'=>'form-control']) !!}
    {!! $errors->first('quote', '<span class="form-error">Quote is required</span>') !!}
</div>

<div class="form-group">
{!! Form::submit($btnText, ['class'=>'btn btn-primary']) !!}
</div>