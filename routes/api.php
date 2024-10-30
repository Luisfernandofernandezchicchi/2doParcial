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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/students', [ZapatosController::class, 'show']);
Route::post('/students', [ZapatosController::class, 'store']);
Route::delete('/students/{id}', [ZapatosController::class, 'delete']);
Route::put('/students/{id}', [ZapatosController::class, 'edit']);
