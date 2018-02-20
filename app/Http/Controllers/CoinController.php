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
  public function update(Request $request, $Id)
  {
    return view('coins.update')->with('coins', $coins);
    $coin = Coin::find($Id);
    $coin->year = $request->year;
    $coin->save();
    $coin = Coin::get();
  }
}
