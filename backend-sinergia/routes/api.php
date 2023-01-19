<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PacienteController;
use App\Http\Controllers\API\DepartamentoController;
use App\Http\Controllers\API\MunicipioController;
use App\Http\Controllers\API\GeneroController;
use App\Http\Controllers\API\TipoDocumentoController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::prefix('paciente')->group(function () {
    Route::get('/',[ PacienteController::class, 'getAll']);
    Route::post('/',[ PacienteController::class, 'create']);
    Route::delete('/{id}',[ PacienteController::class, 'delete']);
    Route::get('/{id}',[ PacienteController::class, 'get']);
    Route::put('/{id}',[ PacienteController::class, 'update']);
});

Route::prefix('departamento')->group(function () {
    Route::get('/',[ DepartamentoController::class, 'getAll']);
});

Route::prefix('municipio')->group(function () {
    Route::get('/{id_departamento}',[ MunicipioController::class, 'get']);
});

Route::prefix('genero')->group(function () {
    Route::get('/',[ GeneroController::class, 'getAll']);
});

Route::prefix('tipo-documento')->group(function () {
    Route::get('/',[ TipoDocumentoController::class, 'getAll']);
});
