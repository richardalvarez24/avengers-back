<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;

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

/*Rutas del CRUD para la manipulación de datos del equipo avengers*/
Route::get('/members',[MembersController::class, 'index']);

Route::get('/member/{id}',[MembersController::class, 'show']);

Route::post('/save',[MembersController::class, 'store']);

Route::put('/update/{id}',[MembersController::class, 'update']);

Route::delete('/delete/{id}',[MembersController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
