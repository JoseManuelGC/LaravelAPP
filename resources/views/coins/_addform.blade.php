@if (isset($errors) && (count($errors) > 0))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
	{{ Form::label('value', 'Value') }} <em></em>
	{{ Form::number('value', null, ['class' => 'form-control', 'id' => 'value', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('country', 'Country') }} <em></em>
    {{ Form::text('country', null, ['class' => 'form-control', 'id' => 'country', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('period', 'Period') }} <em></em>
    {{ Form::text('period', null, ['class' => 'form-control', 'id' => 'period', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('year', 'Year') }} <em></em>
    {{ Form::number('year', null, ['class' => 'form-control', 'id' => 'year', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('type', 'Type') }} <em></em>
    {{ Form::text('type', null, ['class' => 'form-control', 'id' => 'type', 'required' => 'required']) }}
</div>

<div class="form-group">
	{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
</div>