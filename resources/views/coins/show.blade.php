@extends('app')
@section('content')
<div class="container-fluid">
<h1>
  Coin
</h1>
 
<p><strong>Id:</strong> {{ $coin->id}}</p>
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
</div>