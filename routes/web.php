<?php

use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\VuelosAsientosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aerolinea', function () {
    return view('inicio');
});

//Tipos de asiento 
Route::get('/aerolinea/tipo-asiento', [TipoAsientoController::class,'tipoAsiento'])->name('tipo.asiento.ver');
Route::get('/aerolinea/tipo-asiento/crear', [TipoAsientoController::class,'crearAsiento'])->name('asiento.crear');
Route::post('/aerolinea/tipo-asiento/guardar', [TipoAsientoController::class, 'guardarAsiento'])->name('asiento.guardar');
Route::put('/aerolinea/tipo-asiento/eliminar/{id}', [TipoAsientoController::class, 'eliminarAsiento'])->name('asiento.eliminar');
Route::get('/aerolinea/tipo-asiento/editar/{id}', [TipoAsientoController::class,'editarAsiento'])->name('asiento.editar');
Route::put('/aerolinea/tipo-asiento/actualizar/{id}', [TipoAsientoController::class,'actualizarAsiento'])->name('asiento.actualizar');

//Vuelos
Route::get('/aerolinea/vuelos', [VuelosController::class,'vuelos'])->name('vuelos.home');
Route::get('/aerolinea/vuelos/crear', [VuelosController::class,'crear'])->name('vuelos.crear');
Route::post('/aerolinea/vuelos/guardar', [VuelosController::class,'guardar'])->name('vuelos.guardar');
Route::get('/aerolinea/vuelos/editar/{id}', [VuelosController::class,'editar'])->name('vuelos.editar');
Route::put('/aerolinea/vuelos/actualizar/{id}', [VuelosController::class,'actualizar'])->name('vuelos.actualizar');
Route::delete('/aerolinea/vuelos/eliminar/{id}', [VuelosController::class,'eliminar'])->name('vuelos.eliminar');
Route::get('/aerolinea/vuelos/agregar/{id}/{fecha}', [VuelosController::class,'agregar'])->name('vuelos.agregar.asiento');


//Vuelos Asientos
Route::get('/aerolinea/vuelos/asientos/{numero}', [VuelosAsientosController::class,'ver'])->name('vuelos.ver.asientos');
Route::post('/aerolinea/vuelos/guardar/asiento/{id}', [VuelosAsientosController::class,'guardarAsiento'])->name('vuelos.guardar.asiento');
