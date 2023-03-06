<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoyagerPeticionesController;
use App\Http\Controllers\VoyagerUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('peticion', [VoyagerPeticionesController::class, 'store']);
Route::get('peticion/{id}', [VoyagerPeticionesController::class, 'show']);
Route::get('peticiones/listado', [VoyagerPeticionesController::class, 'index']);
Route::get('peticiones/firmar/{id}', [VoyagerPeticionesController::class, 'firmar']);
Route::put('peticiones/estado/{id}', [VoyagerPeticionesController::class, 'cambiarEstado']);
Route::get('mispeticiones', [VoyagerPeticionesController::class, 'showPeticionesByUser']);
Route::get('users/firmas', [VoyagerUserController::class, 'peticionesFirmadas']);
Route::put('peticiones/edit/{id}', [VoyagerPeticionesController::class, 'update']);
Route::delete('peticiones/delete/{id}', [VoyagerPeticionesController::class, 'destroy']);
Route::get('peticiones/list', [VoyagerPeticionesController::class, 'indexPaginated']);

Route::controller(AuthController::class)->group(function() {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'resfresh');
    Route::get('me', 'me');
});
