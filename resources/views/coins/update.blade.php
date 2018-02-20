@extends('app')
@section('content')
<div class="container">
  @if(session()->has('status'))
    <p class="alert alert-info">
      {{  session()->get('status') }}
    </p>
  @endif
    <div class="col-sm-6 col-sm-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          Edit Coin
        </div>
        <div class="panel-body">
        {{ Form::model($coin, ['url' => route('coins.update', $coin->id), 'method' => 'PUT' ]) }}
          @include('coins._editform')
        {{ Form::close() }}
        </div>
    </div>
  </div>
</div>
@endsection
