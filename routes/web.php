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

Route::get('generar-pdf', 'ProductosController@productosPDF');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    //PRODUCTOS
    // crear
    Route::post('productos/store', 'ProductosController@store')->name('productos.store')
        ->middleware('can:productos.create');

    //visualizar el sitado
    Route::get('productos/', 'ProductosController@index')->name('productos.index')
        ->middleware('can:productos.index');

    // ver el formulario de creacion
    Route::get('productos/create', 'ProductosController@create')->name('productos.create')
        ->middleware('can:productos.create');
    // actualizar
    Route::put('productos/{producto}', 'ProductosController@update')->name('productos.update')
        ->middleware('can:productos.edit');
    //ver el detalle
    Route::get('productos/{producto}', 'ProductosController@show')->name('productos.show')
        ->middleware('can:productos.show');
    // eliminar
    Route::delete('productos/{producto}', 'ProductosController@destroy')->name('productos.destroy')
        ->middleware('can:productos.destroy');
    // ver el formulario de edicion
    Route::get('productos/{producto}/edit', 'ProductosController@edit')->name('productos.edit')
        ->middleware('can:productos.edit');
});
