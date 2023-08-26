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

//login
Route::post('/login', 'App\Http\Controllers\UserController@login');
//register
Route::post('/register', 'App\Http\Controllers\UserController@register');

//santcum

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/zemlje', 'App\Http\Controllers\ZemljaController');
    Route::apiResource('/tipovi', 'App\Http\Controllers\TipController');
    Route::apiResource('/kafe', 'App\Http\Controllers\KafaController');
});

