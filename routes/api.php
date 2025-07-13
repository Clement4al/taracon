<?php

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

use App\Http\Controllers\Api\CartProductController;
use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
        Route::apiResource('products.cart', CartProductController::class)->except(['index', 'show']);
});
