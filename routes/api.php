<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CartProductController;
use App\Http\Controllers\Api\PosOrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductImageController;
use App\Http\Controllers\Api\RegisteredUserController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\SubCategoryController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StockController;
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
Route::name('api.')->group(function () {
    Route::post('/login',    [AuthController::class, 'store'])->name('login');
    Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

    Route::singleton('cart',  CartController::class)->destroyable()->only('destroy');

    Route::apiResource('products.cart', CartProductController::class)->except(['index', 'show']);

    Route::middleware(['auth', 'can:access'])->group(function () {
        Route::resource('pos',    PosOrderController::class)->only('store');
        Route::resource('users',  UserController::class)->only('store', 'update', 'destroy');
        Route::resource('roles',  RoleController::class)->except('index', 'show');
        Route::resource('brands', BrandController::class)->except('index', 'show');
//        Route::resource('stock',  StockController::class)->only('store', 'destroy');

        Route::resource('categories', CategoryController::class)->only('store', 'update');
        Route::resource('sub-categories',  SubCategoryController::class)->except('index', 'show');
        Route::resource('products',   ProductController::class)->only( 'store', 'update', 'destroy');
        Route::singleton('settings', SettingController::class)->only('update');

        Route::resource('products.images', ProductImageController::class)->only('store', 'destroy')->shallow();
    });
});


