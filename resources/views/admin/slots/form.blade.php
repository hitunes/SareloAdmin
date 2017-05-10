<div class="form-group {{ $errors->has('time_range') ? 'has-error' : ''}}">
    {!! Form::label('time_range', 'Time Range', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('time_range', null, ['class' => 'form-control']) !!}
        {!! $errors->first('time_range', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('slot_available') ? 'has-error' : ''}}">
    {!! Form::label('slot_available', 'Number of slot available', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('slot_available', null, ['class' => 'form-control']) !!}
        {!! $errors->first('slot_available', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
