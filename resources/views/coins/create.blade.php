@extends('app')
@section('content')
<div class="container">
	@if(session()->has('status'))
		<p class="alert alert-info">
			{{	session()->get('status') }}
		</p>
	@endif
    <div class="col-sm-6 col-sm-offset-3">
    	<div class="panel panel-default">
    		<div class="panel-heading">
    			Add Coin
    		</div>
    		<div class="panel-body">
				{{ Form::open(['url' => route('coins.store'), 'method' => 'POST' ]) }}
					@include('coins._addform')
				{{ Form::close() }}
    		</div>
	    </div>
	</div>
</div>
@endsection