<?php

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
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('categorias', 'categoriaController');

Route::resource('clientes', 'clienteController');

Route::resource('productos', 'productoController');

Route::resource('ventas', 'ventaController');

Route::resource('detalleVentas', 'detalleVentaController');