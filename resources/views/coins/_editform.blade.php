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
	{{ Form::label('year', 'Year') }} <em></em>
	{{ Form::number('year', null, ['class' => 'form-control', 'id' => 'year', 'required' => 'required']) }}
</div>

<div class="form-group">
	{{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
</div>