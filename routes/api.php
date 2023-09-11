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

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::post('/blog', [App\Http\Controllers\BlogController::class, 'store']);
Route::delete('/blog/{id}', [App\Http\Controllers\BlogController::class, 'destroy']);
Route::put('/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'update']);
Route::get('/blog/user/{id}', [App\Http\Controllers\BlogController::class, 'getAllByUser']);


Route::get('/password', [App\Http\Controllers\SenhaController::class, 'index']);
Route::post('/password', [App\Http\Controllers\SenhaController::class, 'store']);
Route::delete('/password/{id}', [App\Http\Controllers\SenhaController::class, 'destroy']);
Route::put('/password/edit/{id}', [App\Http\Controllers\SenhaController::class, 'update']);
Route::get('/password/user/{id}', [App\Http\Controllers\SenhaController::class, 'getAllByUser']);
