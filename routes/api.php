<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\CartProductController;
use App\Http\Controllers\Api\RegisteredUserController;
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

Route::post('/login',    [AuthController::class, 'store'])->name('login');
Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');
//Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('api.register');

Route::name('api.')->group(function () {
    Route::apiResource('products.cart', CartProductController::class)->except(['index', 'show']);
});
