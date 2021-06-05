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
    return view('index0215');
});
Route::get('/about0215', function () {
    return view('about0215');
});

Route::get('/katalog0215', 'App\Http\Controllers\KatalogController@index');
Route::get('/tambah0215', 'App\Http\Controllers\KatalogController@create');
Route::post('/tambah0215', 'App\Http\Controllers\KatalogController@store');
Route::get('/transaksi0215', 'App\Http\Controllers\TransaksiController@index');
Route::post('/transaksi0215', 'App\Http\Controllers\TransaksiController@store');
