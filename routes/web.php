<?php

use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\FlujoCajaController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\ServicesController;
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

Route::get('/',[FamiliaController::class,'inicio']);

//Route::resource('familias',FamiliaController::class);

//Familias
Route::get('/familias',[FamiliaController::class,'inicio'])->name('familias.inicio');
Route::post('/familias',[FamiliaController::class,'registrar'])->name('familias.registrar');
Route::post('/familias/actualizar',[FamiliaController::class,'actualizar'])->name('familias.actualizar');

//Flujo de Cajas
Route::get('/flujodecajas',[FlujoCajaController::class,'inicio'])->name('flujodecajas.inicio');
Route::post('/flujodecajas',[FlujoCajaController::class,'registrar'])->name('flujodecajas.registrar');
Route::post('/flujodecajas/actualizar',[FlujoCajaController::class,'actualizar'])->name('flujodecajas.actualizar');

//Listas
Route::get('/listas',[ListaController::class,'inicio'])->name('listas.inicio');
//Unidad de Medidas
Route::post('/listaUnidadMedidas',[ListaController::class,'registrarlistaUnidadMedidas'])->name('listas.registrarlistaUnidadMedidas');
Route::post('/listaUnidadMedidas/actualizar',[ListaController::class,'actualizarlistaUnidadMedidas'])->name('listas.actualizarlistaUnidadMedidas');
//Procesos
Route::post('/listaProcesos',[ListaController::class,'registrarlistaProcesos'])->name('listas.registrarlistaProcesos');
Route::post('/listaProcesos/actualizar',[ListaController::class,'actualizarlistaProcesos'])->name('listas.actualizarlistaProcesos');
//Clasificacion
Route::post('/listaClasificacions',[ListaController::class,'registrarclasificacions'])->name('listas.registrarclasificacions');
Route::post('/listaClasificacions/actualizar',[ListaController::class,'actualizarclasificacions'])->name('listas.actualizarclasificacions');
//Unidad de Consumo
Route::post('/listaUnidadConsumo',[ListaController::class,'registrarlistaUnidadConsumo'])->name('listas.registrarlistaUnidadConsumo');
Route::post('/listaUnidadConsumo/actualizar',[ListaController::class,'actualizarlistaUnidadConsumo'])->name('listas.actualizarlistaUnidadConsumo');
//Familias de Materiales
Route::post('/listaFamiliasMateriales',[ListaController::class,'registrarlistaFamiliasMateriales'])->name('listas.registrarlistaFamiliasMateriales');
Route::post('/listaFamiliasMateriales/actualizar',[ListaController::class,'actualizarlistaFamiliasMateriales'])->name('listas.actualizarlistaFamiliasMateriales');




