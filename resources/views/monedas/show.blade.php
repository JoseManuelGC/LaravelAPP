@extends('app')
@section('content')
<h1>
  Moneda {{ $moneda->currency}}
</h1>
 
<p>Id moneda; {{ $moneda->id}}</p>
<p>Valor: {{ $moneda->valor}}</p>
<p>País: {{ $moneda->pais }}</p>
<p>Año: {{ $moneda->year}}</p>
<p>Tipo:{{ $moneda->tipo}}</p>
<hr>
 
<a href="{{ route('monedas.index') }}">Volver al índice</a>
<a href="{{ route('monedas.show', $moneda->id) }}">Recargar</a>