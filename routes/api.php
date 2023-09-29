<?php

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

Route::put('/task/{d}',[TareaController::class, 'modificarTarea']);
Route::get('/task',[TareaController::class, 'listarTareas']);
Route::post('/task',[TareaController::class, 'crearTarea']);
Route::get('/task/{d}',[TareaController::class, 'listarTarea']);
Route::delete('/task/{d}',[TareaController::class, 'borrarTarea']);