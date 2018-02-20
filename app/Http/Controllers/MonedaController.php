<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Moneda;

class MonedaController extends Controller
{
    public function index()
  {
    // Devolverá todas las monedas
    $monedas = Moneda::get();
    return view('monedas.index')->with('monedas', $monedas);
  }

  public function show($Id)
  {
    $moneda = Moneda::find($Id);
    return view('monedas.show')->with('moneda', $moneda);
  }
  public function update($Id)
  {
    $moneda = Moneda::find($Id);
    $moneda->pais = 'España';
    $moneda->save();
    $monedas = Moneda::get();
    return view('monedas.index')->with('monedas', $monedas);
  }
}
