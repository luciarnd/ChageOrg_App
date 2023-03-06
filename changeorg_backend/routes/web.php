<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\VoyagerPeticionesController;
use App\Http\Controllers\VoyagerUserController;
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

/*Route::get('/', [PagesController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('socios', [PagesController::class, 'socios']);
Route::get('/peticiones', [VoyagerPeticionesController::class, 'index'])->middleware(['auth']);
Route::get('/peticiones/{id}', [VoyagerPeticionesController::class, 'show'])->middleware(['auth']);
Route::get('/mispeticiones', [VoyagerPeticionesController::class, 'showPeticionesByUser'])->middleware(['auth']);
Route::get('/peticiones/firmar/{id}', [VoyagerPeticionesController::class, 'firmar'])->middleware(['auth']);
Route::get('/peticion/create', [VoyagerPeticionesController::class, 'create'])->middleware(['auth']);
Route::post('/peticiones', [VoyagerPeticionesController::class, 'store'])->middleware(['auth']);
Route::get('/peticiones/cambiarestado/{id}', [VoyagerPeticionesController::class, 'cambiarEstado'])->middleware(['auth']);
Route::get('/peticionesFirmadas', [VoyagerUserController::class, 'peticionesFirmadas'])->middleware(['auth']);*/

require __DIR__.'/auth.php';
