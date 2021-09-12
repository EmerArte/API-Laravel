<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MembersiaController;
use App\Http\Controllers\EntrenadorController;
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
Route::get('usuarios',[UsuarioController::class,'index']);
Route::post('usuarios',[UsuarioController::class,'store']);
Route::get('usuarios/{usuario}',[UsuarioController::class,'show']);
Route::put('usuarios/{usuario}',[UsuarioController::class,'update']);
Route::delete('usuarios/{usuario}',[UsuarioController::class,'destroy']);



Route::get('membersias',[MembersiaController::class,'index']);
Route::post('membersias',[MembersiaController::class,'store']);
Route::get('membersias/{membersia}',[MembersiaController::class,'show']);
Route::put('membersias/{membersia}',[MembersiaController::class,'update']);
Route::delete('membersias/{membersia}',[MembersiaController::class,'destroy']);




Route::get('entrenadores',[EntrenadorController::class,'index']);
Route::post('entrenadores',[EntrenadorController::class,'store']);
Route::get('entrenadores/{entrenador}',[EntrenadorController::class,'show']);
Route::put('entrenadores/{entrenador}',[EntrenadorController::class,'update']);
Route::delete('entrenadores/{entrenador}',[EntrenadorController::class,'destroy']);