<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tareas', 'TareaController@index'); //mostrar todos los registros
Route::post('/tareas', 'TareaController@store'); //crear un registros
Route::get('/tareas/{id}', 'TareaController@show'); //mostrar un registro
Route::put('/tareas/{id}', 'TareaController@update'); //actualizar registros
Route::delete('/tareas/{id}', 'TareaController@destroy'); //eliminar registros
