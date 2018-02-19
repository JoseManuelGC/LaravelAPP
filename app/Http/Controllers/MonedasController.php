<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Moneda;

class MonedasController extends Controller
{
	public function index()
  	{
    	$monedas = Moneda::get();   // Devolverá todas las monedas
    	return view('monedas.index')->with('monedas', $monedas);
  	}
}
