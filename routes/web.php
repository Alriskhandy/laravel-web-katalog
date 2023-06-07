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
    return view('index');
});

Route::get('/sepatu-lari', function () {
    return view('katalog.lari');
});

Route::get('/sepatu-basket', function () {
    return view('katalog.basket');
});

Route::get('/sepatu-futsal', function () {
    return view('katalog.futsal');
});


