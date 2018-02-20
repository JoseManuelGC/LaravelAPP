@extends('app')
@section('content')
<h1 class="text-primary">Coin List</h1>
 
<table class="table table-bordered" id="tableCoins">
  <thead>
    <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Value</th>
        <th class="text-center">Country</th>
        <th class="text-center">Period</th>
        <th class="text-center">Year</th>
        <th class="text-center">Type</th>
        <th class="text-center">Operation</th>
    </tr>
  </thead>
  <tbody>
    @foreach($coins as $coin)
        <tr>
            <td class="text-center">{{ $coin->id}}</td>
            <td class="text-center">{{ $coin->value/100}}€</td>
            <td class="text-center">{{ $coin->country}}</td>
            <td class="text-center">{{ $coin->period}}</td>
            <td class="text-center">{{ $coin->year}}</td>
            <td class="text-center">{{ $coin->type}}</td>
            <td>
                <a href="{{ route('coins.show', $coin->id) }}" class="btn btn-info">View</a>
                <a href="{{ route('coins.edit', $coin->id) }}" class="btn btn-success">Edit</a>
            </td>
            
        </tr>
    @endforeach
  </tbody>
