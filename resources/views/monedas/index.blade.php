@extends('app')
@section('content')
<h1 class="text-primary">Lista de Monedas</h1>
 
<table class="table table-bordered" id="tableMonedas">
  <thead>
    <tr>
        <th class="text-center">Id moneda</th>
        <th class="text-center">Valor</th>
        <th class="text-center">País</th>
        <th class="text-center">Año</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach($monedas as $moneda)
        <tr>
            <td class="text-center">{{ $moneda->id}}</td>
            <td class="text-center">{{ $moneda->valor}}</td>
            <td class="text-center">{{ $moneda->pais }}</td>
            <td class="text-center">{{ $moneda->year}}</td>
            <td class="text-center">{{ $moneda->tipo}}</td>
            <td>
                <a href="{{ route('monedas.show', $moneda->id) }}" class="btn btn-info">Ver</a>
            </td>
        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th class="text-center">Id moneda</th>
      <th class="text-center">Valor</th>
      <th class="text-center">País</th>
      <th class="text-center">Año</th>
      <th class="text-center">Tipo</th>      
      <th class="text-center">Acción</th>
    </tr>
  </tfoot>
</table>