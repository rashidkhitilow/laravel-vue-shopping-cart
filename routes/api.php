<?php

use Illuminate\Http\Request;

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

Route::get('/products', [\App\Http\Controllers\Api\ProductController::class, 'index']);
Route::get('/product/{slug}', [\App\Http\Controllers\Api\ProductController::class, 'show']);

Route::get('/purchase', [\App\Http\Controllers\Api\UserController::class, 'purchase']);
