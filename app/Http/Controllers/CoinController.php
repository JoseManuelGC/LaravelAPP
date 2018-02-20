<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Coin;

class CoinController extends Controller
{
    public function index()
  {
    // Devolverá todas las monedas
    $coins = Coin::get();
    return view('coins.index')->with('coins', $coins);
  }

  public function show($Id)
  {
    $coin = Coin::find($Id);
    return view('coins.show')->with('coin', $coin);
  }
  public function edit($Id)
  {
  	$coin = Coin::find($Id);
    return view('coins.update')->with('coin', $coin);
  }

  public function update($id, Request $request)
{
	$coin = Coin::find($id);
	$coin->year = $request->year;
    $coin->save();
	$coins = Coin::get();
    return view('coins.index')->with('coins', $coins);
}

  
}
