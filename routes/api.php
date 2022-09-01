<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CreditoProductoController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//LISTAR TODOS
Route::get('/productos', [CreditoProductoController::class, 'getAll']);

//LISTAR ESPECIFICAMENTE
Route::get('/productos/{id}', [CreditoProductoController::class, 'getItem']);

//INSERTAR
Route::post('/productos', [CreditoProductoController::class, 'store']);

//ACTUALIZAR
Route::put('/productos/{id}', [CreditoProductoController::class, 'updatePut']);

//ACTUALIZAR
Route::patch('/productos/{id}', [CreditoProductoController::class, 'updatePatch']);

//BORRAR
Route::delete('/productos/{id}', [CreditoProductoController::class, 'delete']);


