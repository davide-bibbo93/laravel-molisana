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

 // prendere array pasta dalla config e passarlo alla view
  $array = config('pasta');

  // il primo argomento di view è il nome del file in resources/views, il secondo è un array
  return view('home', ['array'=> $array]);
});

// Rotta Dettaglio Prodotto
Route::get('/products/{id?}', function($id = null) {

  if (empty($id)) {
    return redirect('/');
  }

  // prendere array pasta dalla config e passarla alla view
  $array = config('pasta');

  return view('products', ['idProduct' => $id, 'array'=> $array]);

});
