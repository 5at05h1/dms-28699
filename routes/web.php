<?php

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

use Illuminate\Support\Facades\Route;
use App\Models\Item;

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

Route::get('/', 'App\Http\Controllers\ItemController@index');
Route::get('/item/{id}', 'App\Http\Controllers\ItemController@view');
Route::post('/item/{id}', 'App\Http\Controllers\CartController@add');
Route::get('/item/favorite/{id}', 'App\Http\Controllers\FavoriteController@add');

Auth::routes();

Route::get('/cart', 'App\Http\Controllers\CartController@index');
Route::delete('/cart', 'App\Http\Controllers\CartController@delete');
Route::put('/cart', 'App\Http\Controllers\CartController@update');