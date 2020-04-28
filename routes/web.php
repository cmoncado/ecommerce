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
    return view('welcome');
});

Auth::routes();

Route::resource('productos','ProductController');
// 'productos' es la petición en la url
// si colocamos productos/create -> buscará la función create y traerá tal vista
// Route es la clase de rutas 
Route::get('/home', 'HomeController@index')->name('home');
