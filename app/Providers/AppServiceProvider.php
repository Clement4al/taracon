<?php

namespace App\Providers;

use App\Support\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('cart', function () {
            return new Cart();
        });
        Route::resourceParameters([
            'shop' => 'product',
        ]);

    }

    public function boot(): void
    {
        Model::unguard();

        $this->registerMigrationMacros();
        $this->registerApiResponseMacros();
//
//        $this->routes(function () {
//            Route::middleware('api')
//                ->prefix('api')->name('api.')
//                ->group(base_path('routes/api.php'));
//
//            Route::middleware('web')
//                ->group(base_path('routes/web.php'));
//        });
        Paginator::useBootstrapFive();

    }

    public function registerApiResponseMacros(): void
    {
        ResponseFactory::macro('api', function (string $message, $data = [], $status = 200, array $headers = []) {
           return response()->json(['message' => $message, 'data' => $data], $status, $headers);
        });
    }

    /**
     * Bootstrap any application services.
     */

    public function registerMigrationMacros()
    {
        Blueprint::macro('authors', function () {
            /** @var Blueprint $this */
            $this->foreignId('created_by')->nullable()->constrained('users');
            $this->foreignId('updated_by')->nullable()->constrained('users');
        });
    }
}
