<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
//use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyEmailController;
use App\Livewire\AppCart;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


//Route::get('/counter', [AppCart::class]);
// Define global parameter mapping first

//Route::get('/welcome', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
Route::view('/pos',         'pos')->name('pos')->can('point-of-sale');

Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/reset-password/{token}', 'auth.reset')->name('password.reset');
});

Route::resource('shop', ShopController::class)->only('index', 'show');

Route::resource('cart', CartController::class)->only('index', 'show');
Route::resource('check-out', CheckoutController::class)->only('index');

Route::middleware(['auth', 'can:access'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
//    Route::get('/stock-export', StockExportController::class)->name('stock-export');
//    Route::get('/sales-export', SalesExportController::class)->name('sales-export');

    Route::get('/email/verify/{id}/{hash}', VerifyEmailController::class)->name('verification.verify');

    Route::resource('users',               UserController::class)->only('index', 'show');
    Route::resource('roles',               RoleController::class)->only('index', 'show');
    Route::resource('stock',               StockController::class)->only('create');
//    Route::resource('orders',              OrderController::class)->only('index', 'show');
    Route::resource('brands',              BrandController::class)->only('index');
//    Route::resource('colors',              ColorController::class)->only('index');
//    Route::resource('flyers',              FlyerController::class)->only('index', 'create');
//    Route::resource('reports',             ReportController::class)->only('index');
    Route::resource('products',            ProductController::class)->only('index', 'create', 'edit');
//    Route::resource('transfers',           TransferController::class)->only('index', 'show');
//    Route::resource('locations',           LocationController::class)->only('index', 'show');
    Route::resource('categories',          CategoryController::class)->only('index', 'create', 'edit');
//    Route::resource('users.orders',        UserOrderController::class)->only('index');
//    Route::resource('bulk-products',       BulkProductController::class)->only('index');
    Route::resource('sub-categories',      SubCategoryController::class)->only('index');
//    Route::resource('locations.transfers', TransferController::class)->only('create');
//    Route::singleton('transfers.waybill',  TransferWaybillController::class)->only('show');
//    Route::singleton('orders.invoice',     OrderInvoiceController::class)->only('show');
//    Route::singleton('orders.waybill',     OrderWaybillController::class)->only('show');
    Route::singleton('settings',           SettingController::class)->only('edit');
});
