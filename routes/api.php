<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('barang','App\Http\Controllers\BarangController');
Route::resource('pembeli','App\Http\Controllers\PembeliController');
Route::resource('transaksi','App\Http\Controllers\PembeliController');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function() {
    // Route::get('all', 'App\Http\Controllers\ProvinceController@getAllProvince');
    Route::get('get', 'App\Http\Controllers\BarangController@filterBarang');
});