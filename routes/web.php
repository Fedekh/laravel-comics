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

Route::get('/', function () {
    return view('home');
});
    

Route::get('/comics', function () {
    $comics = config('db.comics');  //config serve per richiamare il file db.php, ovvero il file che contiene l'array con i dati dei fumetti
    return view('comics', compact('comics')); //al posto di compact('comics') si può scrivere ['comics' => $comics]
});

Route::get('/shop', function () {
    $comics = config('db.comics');
    return view('shop', compact('comics'));
});


