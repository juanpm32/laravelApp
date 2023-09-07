<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ConvertidorController;
use App\Http\Controllers\TablaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('inicio');
})->name('inicio');*/

Route::get('/', [HomeController::class,'index'])->name('inicio');

Route::get('/pagina/nosotros', [HomeController::class,'nosotros'])->name('nosotros');

Route::get('/pagina/servicios', [ServiciosController::class,'index'])->name('servicios');

Route::get('/servicio/detalle/{servicio}', [ServiciosController::class, 'detalle'])->name('servicios.detalle');

Route::get('/pagina/contactanos', [HomeController::class,'contactanos'])->name('contactanos');
Route::post('/pagina/contactanos/respuesta', [HomeController::class,'respuesta'])->name('contactanos.respuesta');

Route::get('/convertidor', [ConvertidorController::class,'index'])->name('convertidor');
Route::post('/convertidor/procesar', [ConvertidorController::class,'procesar'])->name('convertidor.procesar');

Route::get('/tabla', [TablaController::class,'index'])->name('tabla');
Route::post('/tabla/procesar', [TablaController::class,'procesar'])->name('tabla.procesar');