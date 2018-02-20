@extends('app')
@section('content')
<h1>
  Edit Coin
</h1>
 
<!--form method="put" action="{{ route('coins.update', $coin->id)}}">
  <div class="form-group">
    <label for="year">Year:</label>
    <input type="text" class="form-control" id="year">
  </div>
  <button type="submit" class="btn btn-default">Update</button>
</form-->

<p><strong>Id2:</strong> {{ $coin->id}}</p>
<p><strong>Value:</strong> {{ $coin->value/100 }}€</p>
<p><strong>Country:</strong> {{ $coin->country}}</p>  
<p><strong>Period:</strong> {{ $coin->period}}</p>
<p><strong>Year:</strong> {{ $coin->year}}</p>
<p><strong>Type:</strong> {{ $coin->type}}</p>
<img src="{{ asset( 'images/' . $coin->id .".jpg")}}" style ="height:90px" >
<hr>
 
<a href="{{ route('coins.index') }}">Back to index</a>
<br>
<a href="{{ route('coins.show', $coin->id) }}">Reload</a>