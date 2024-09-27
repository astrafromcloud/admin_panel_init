<?php

use App\Http\Controllers\Purse\DeleteController;
use App\Http\Controllers\Purse\IndexController;
use App\Http\Controllers\Purse\ShowController;
use App\Http\Controllers\Purse\StoreController;
use App\Http\Controllers\Purse\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/purses', IndexController::class);
Route::post('/purses', StoreController::class);
Route::patch('/purses/{purse}/edit', UpdateController::class);
Route::get('/purses/{purse}/edit', ShowController::class);
Route::delete('/purses/{purse}', DeleteController::class);
