<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ProductoController;

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

Route::get("/v1/producto",[ProductoController::class,"getAll"]);
Route::get("/v1/producto/{id}",[ProductoController::class,"getItem"]);
Route::post("/v1/producto",[ProductoController::class,"store"]);
Route::put("/v1/producto",[ProductoController::class,"update"]);
Route::patch("/v1/producto",[ProductoController::class,"patch"]);
Route::delete("/v1/producto/{id}",[ProductoController::class,"delete"]);