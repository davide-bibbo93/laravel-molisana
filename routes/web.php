<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rotta Homepage
Route::get('/', function () {

  // array pasta config
  $data = config('pasta');

  // var array lunghezza
  $lunghe = [];
  $corte = [];
  $cortissime = [];

  // foreach per ciclare la carta pasta a seconda del tipo
  foreach ($data as $key => $card) {

    $card['id'] = $key;

    if ($card['tipo'] == 'lunga') {
      $lunghe[] = $card;
    }
    elseif ($card['tipo'] == 'corta') {
      $corte[] = $card;
    }
    elseif ($card['tipo'] == 'cortissima') {
      $cortissime[] = $card;
    }

  }

  // funzione compact per creare un array che contiene tutte le variabili
  return view('home', compact('lunghe', 'corte', 'cortissime'));

})->name('home');

// Rotta Dettaglio Prodotto
Route::get('/product/{id}', function ($id) {

  // array pasta config
  $data = config('pasta');

  // var product per indicare id dell'array data
  $product = $data[$id];

  // var length per contare elementi presenti nell'array data e farlo partire da -1
  $length = count($data) - 1;

  // funzione compact per creare un array che contiene tutte le variabili
  return view('product', compact('product', 'id', 'length'));

})->name('product');

// ROtta News
Route::get('/news', function () {

  return view('news');

})->name('news');
