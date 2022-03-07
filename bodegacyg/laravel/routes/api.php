<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ProductoController;
use App\Http\Controllers\v1\CategoriaController;
use App\User;

use App\Http\Controllers\v2\SeguridadController;



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

//Para llamar productos

    Route::get("/v1/producto",[ProductoController::class,"getAll"]);
    Route::get("/v1/producto/{id}",[ProductoController::class,"getItem"]);
    Route::post("/v1/producto",[ProductoController::class,"store"]);
    Route::put("/v1/producto",[ProductoController::class,"update"]);
    Route::patch("/v1/producto/{id}",[ProductoController::class,"patch"]);
    Route::delete("/v1/producto/{id}",[ProductoController::class,"delete"]);

//Para llamar categorias

    Route::get("/v1/categoria",[CategoriaController::class,"getAll"]);
    Route::get("/v1/categoria/{id}",[CategoriaController::class,"getItem"]);
    Route::post("/v1/categoria",[CategoriaController::class,"store"]);
    Route::put("/v1/categoria",[CategoriaController::class,"update"]);
    Route::patch("/v1/categoria/{id}",[CategoriaController::class,"patch"]);
    Route::delete("/v1/categoria/{id}",[CategoriaController::class,"delete"]);

//Para el login del usuario
    
    Route::get("/v1/seguridad/usuarios",[SeguridadController::class,"getAll"]);
    Route::get("/v1/seguridad/usuarios/{id}",[SeguridadController::class,"getItem"]);
    Route::post("/v1/seguridad/usuarios",[SeguridadController::class,"store"]);
    Route::put("/v1/seguridad/usuarios",[CategoriasController::class,"update"]);
    Route::patch("/v1/seguridad/usuarios",[CategoriasController::class,"patch"]);
    Route::delete("/v1/seguridad/usuarios/{id}",[CategoriasController::class,"delete"]);


//Para la seguridad

Route::post("/v1/seguridad/login",[SeguridadController::class,"login"]);
