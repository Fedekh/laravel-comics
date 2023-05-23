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
    $comics = config('db.comics');
    return view('home', compact('comics'));
});

Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('comics', compact('comics'));
});

Route::get('/shop', function () {
    $comics = config('db.comics');
    return view('shop', compact('comics'));
});

