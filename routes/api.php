<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//categoria
Route::get("categoria","App\Http\Controllers\CategoriaController@index");
Route::post("categoria","App\Http\Controllers\CategoriaController@store");
Route::get("categoria/{id}","App\Http\Controllers\CategoriaController@show");
Route::put("categoria/{id}","App\Http\Controllers\CategoriaController@update");
Route::delete("categoria/{id}","App\Http\Controllers\CategoriaController@destroy");
//categoria detalle
Route::get("detalle","App\Http\Controllers\DetalleController@index");
Route::post("detalle","App\Http\Controllers\DetalleController@store");
Route::get("detalle/{id}","App\Http\Controllers\DetalleController@show");
Route::put("detalle/{id}","App\Http\Controllers\DetalleController@update");
Route::delete("detalle/{id}","App\Http\Controllers\DetalleController@destroy");
//para imagenes
Route::get("imagen","App\Http\Controllers\ImagenesController@index");
Route::post("imagen","App\Http\Controllers\ImagenesController@store");
Route::get("imagen/{id}","App\Http\Controllers\ImagenesController@show");
Route::put("imagen/{id}","App\Http\Controllers\ImagenesController@update");
Route::delete("imagen/{id}","App\Http\Controllers\ImagenesController@destroy");
//para producto
Route::get("producto","App\Http\Controllers\ProdutoController@index");
Route::post("producto","App\Http\Controllers\ProdutoController@store");
Route::get("producto/{id}","App\Http\Controllers\ProdutoController@show");
Route::put("producto/{id}","App\Http\Controllers\ProdutoController@update");
Route::delete("producto/{id}","App\Http\Controllers\ProdutoController@destroy");
//para roles
Route::get("rols","App\Http\Controllers\RolesController@index");
Route::post("rols","App\Http\Controllers\RolesController@store");
Route::get("rols/{id}","App\Http\Controllers\RolesController@show");
Route::put("rols/{id}","App\Http\Controllers\RolesController@update");
Route::delete("rols/{id}","App\Http\Controllers\RolesController@destroy");
//para los usuarios
Route::get("users","App\Http\Controllers\UsuarioController@index");
Route::post("users","App\Http\Controllers\UsuarioController@store");
Route::get("users/{id}","App\Http\Controllers\UsuarioController@show");
Route::put("users/{id}","App\Http\Controllers\UsuarioController@update");
Route::delete("users/{id}","App\Http\Controllers\UsuarioController@destroy");