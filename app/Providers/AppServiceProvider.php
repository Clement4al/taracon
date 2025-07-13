<?php

namespace App\Providers;

use App\Support\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Response;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('cart', function () {
            return new Cart();
        });
    }

    public function boot(): void
    {
        Model::unguard();

        $this->registerMigrationMacros();
        $this->registerApiResponseMacros();

        Paginator::useBootstrapFive();

    }

    public function registerApiResponseMacros(): void
    {
        Response::macro('api', function (string $message, $data = [], $status = 200, array $headers = []) {
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
