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
})->name('welcome');

Auth::routes();



Route::get('productos/indexReact', 'ProductosController@indexReact')->name('productos.indexReact');
Route::get('productos/indexCategorias', 'ProductosController@indexCategorias')->name('productos.indexCategorias');
Route::get('productos/buscar', 'ProductosController@buscar')->name('productos.buscar');


Route::get('reporte_almacen/', 'reporteAlmacenController@index')->name('reporte_almacen.index');
Route::get('reporte_almacen/consolidadoProducto', 'reporteAlmacenController@imprimirConsolidadoProductos')->name('reporte_almacen.consolidadoProducto');
Route::get('reporte_almacen/saldoExistenciasProducto', 'reporteAlmacenController@saldoExistenciasProducto')->name('reporte_almacen.saldoExistenciasProducto');
Route::get('reporte_almacen/ingresoPeriodoFechas/{producto}', 'reporteAlmacenController@ingresoPeriodoFechas')->name('reporte_almacen.ingresoPeriodoFechas');
Route::get('reporte_almacen/imprimirIngresoPeriodoFechas', 'reporteAlmacenController@imprimirIngresoPeriodoFechas')->name('reporte_almacen.imprimirIngresoPeriodoFechas');


Route::get('reserva/', 'ReservaController@index')->name('reserva.index');
Route::get('reserva/create', 'ReservaController@create')->name('reserva.create');
Route::get('reserva/{reservas}/edit', 'ReservaController@edit')->name('reserva.edit');
Route::post('reserva/store', 'ReservaController@store')->name('reserva.store');
Route::put('reserva/{reservas}', 'ReservaController@update')->name('reserva.update');
Route::delete('reserva/{reservas}', 'ReservaController@destroy')->name('reserva.destroy');


Route::delete('detallereserva/{detallereservas}', 'DetalleReservaController@destroy')->name('detallereserva.destroy');
Route::put('detallereserva/{detallereservas}', 'DetalleReservaController@update')->name('detallereserva.update');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mision_vision/', 'InformacionController@misionvision')->name('mision_vision.index');
Route::get('informacion/autoridades_municipales', 'InformacionController@autoridadesMunicipales')->name('informacion.autoridades');
Route::get('informacion/historia', 'InformacionController@historiaWeb')->name('informacion.historiaWeb');
Route::get('informacion/autoridades', 'InformacionController@autoridadesWeb')->name('informacion.autoridadesWeb');
Route::get('informacion/contactos', 'InformacionController@contactosWeb')->name('informacion.contactosWeb');

//visualizar el sitado
Route::get('comunicadosweb/', 'ComunicadoController@indexweb')->name('comunicados.indexweb');
//ver el comunicado
Route::get('comunicados/comunicado/{slug}', 'ComunicadoController@comunicado')->name('comunicados.comunicado');
//ver el categoria
Route::get('comunicados/categoria/{slug}', 'ComunicadoController@categoria')->name('comunicados.categoria');



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
    //actualizar stock
    Route::get('productos/actualizar_stock', 'ProductosController@actualizar_stock')->name('productos.actualizar_stock')
        ->middleware('can:productos.edit');
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

    Route::get('actualizarstock/', 'ActualizarStockController@index')->name('actualizarstock.index')
        ->middleware('can:productos.edit');
    Route::get('actualizarstock/{producto}', 'ActualizarStockController@show')->name('actualizarstock.show')
        ->middleware('can:productos.edit');
    Route::get('actualizarstock/{producto}/create', 'ActualizarStockController@create')->name('actualizarstock.create')
        ->middleware('can:productos.edit');
    Route::get('actualizarstock/{actualizarStock}/edit', 'ActualizarStockController@edit')->name('actualizarstock.edit')
        ->middleware('can:productos.edit');
    Route::post('actualizarstock/store', 'ActualizarStockController@store')->name('actualizarstock.store')
        ->middleware('can:productos.edit');
    Route::put('actualizarstock/{actualizarStock}', 'ActualizarStockController@update')->name('actualizarstock.update')
        ->middleware('can:productos.edit');
    Route::delete('actualizarstock/{actualizarstocks}', 'ActualizarStockController@destroy')->name('actualizarstock.destroy')
        ->middleware('can:productos.edit');



    //COMUNICADO

    // crear
    Route::post('comunicados/store', 'comunicadoController@store')->name('comunicados.store')
        ->middleware('can:comunicados.create');

    //visualizar el sitado
    Route::get('comunicados/', 'ComunicadoController@index')->name('comunicados.index')
        ->middleware('can:comunicados.index');

    // ver el formulario de creacion
    Route::get('comunicados/create', 'ComunicadoController@create')->name('comunicados.create')
        ->middleware('can:comunicados.create');
    // actualizar
    Route::put('comunicados/{comunicado}', 'ComunicadoController@update')->name('comunicados.update')
        ->middleware('can:comunicados.edit');
    //ver el detalle
    Route::get('comunicados/{comunicado}', 'ComunicadoController@show')->name('comunicados.show')
        ->middleware('can:comunicados.show');

    // eliminar
    Route::delete('comunicados/{comunicado}', 'ComunicadoController@destroy')->name('comunicados.destroy')
        ->middleware('can:comunicados.destroy');
    // ver el formulario de edicion
    Route::get('comunicados/{comunicado}/edit', 'ComunicadoController@edit')->name('comunicados.edit')
        ->middleware('can:comunicados.edit');




    //USUARIO


    //visualizar el sitado
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('can:users.index');

    // actualizar
    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('can:users.edit');
    //ver el detalle
    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('can:users.show');
    // eliminar
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');
    // ver el formulario de edicion
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');


    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('can:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('can:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('can:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('can:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('can:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('can:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('can:roles.edit');

    //Entregas

    Route::get('entregas/', 'EntregaController@index')->name('entregas.index')
        ->middleware('can:users.index');
    Route::get('entregas/create', 'EntregaController@create')->name('entregas.create')
        ->middleware('can:users.create');
    Route::get('entregas/{entrega}/edit', 'EntregaController@edit')->name('entregas.edit')
        ->middleware('can:users.edit');
    Route::post('entregas/store', 'EntregaController@store')->name('entregas.store')
        ->middleware('can:users.create');
    Route::get('entregas/{entrega}', 'EntregaController@show')->name('entregas.show')
        ->middleware('can:users.show');
    Route::put('entregas/{entrega}', 'EntregaController@update')->name('entregas.update')
        ->middleware('can:users.edit');
    Route::delete('entregas/{entrega}', 'EntregaController@destroy')->name('entregas.destroy')
        ->middleware('can:users.destroy');
});
