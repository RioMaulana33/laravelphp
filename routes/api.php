<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\ShowController;
use App\Http\Controllers\Api\DeleteController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout']);

Route::get('/show', [ShowController::class, 'show']);

Route::delete('delete/{id}', [DeleteController::class, 'deleteUser']);

Route::get('get/{id}', [RegisterController::class, 'getUser']);

Route::post('update/{id}', [RegisterController::class, 'updateUser']);