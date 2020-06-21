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
Route::get('solicitud/create', 'HojadeRutaController@create')->name('solicitud.create');
Route::post('solicitud/store', 'HojadeRutaController@store')->name('solicitud.store');

Route::get('productos/indexReact', 'ProductosController@indexReact')->name('productos.indexReact');
Route::get('productos/indexCategorias', 'ProductosController@indexCategorias')->name('productos.indexCategorias');
Route::get('productos/buscar', 'ProductosController@buscar')->name('productos.buscar');

Route::get('reserva/', 'ReservaController@index')->name('reserva.index');
Route::get('reserva/create', 'ReservaController@create')->name('reserva.create');
Route::get('reserva/{reservas}/edit', 'ReservaController@edit')->name('reserva.edit');
Route::post('reserva/store', 'ReservaController@store')->name('reserva.store');
Route::put('reserva/{reservas}', 'ReservaController@update')->name('reserva.update');
Route::delete('reserva/{reservas}', 'ReservaController@destroy')->name('reserva.destroy');

Route::delete('detallereserva/{detallereservas}', 'DetalleReservaController@destroy')->name('detallereserva.destroy');
Route::put('detallereserva/{detallereservas}', 'DetalleReservaController@update')->name('detallereserva.update');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    //PRODUCTOS
    // crear reporte
    Route::get('productos/generar-pdf', 'ProductosController@productosPDF')->name('productos.generar-pdf')
        ->middleware('can:productos.index');
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
