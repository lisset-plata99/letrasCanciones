<?php

use App\Http\Controllers\CancionController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {return $request->user();});

Route::get('/Canciones',[CancionController::class,'index']);
Route::post('/NuevaCancion',[CancionController::class,'store']);
Route::get('/ObtenerCancion/{id}',[CancionController::class,'show']);
Route::put('/ActualizarCancion/{id}',[CancionController::class,'update']);
Route::delete('/EliminarCancion/{id}',[CancionController::class,'destroy']);
