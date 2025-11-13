<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Location;
use App\Models\Product;
use App\Models\User;
use App\Support\Cart;
use Illuminate\Foundation\AliasLoader;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
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
        // Give the Laravel facade a unique alias to avoid conflict
        AliasLoader::getInstance()->alias('CloudinaryFacade', Cloudinary::class);

        $this->app->singleton('cart', function () {
            return new Cart();
        });
        Route::resourceParameters([
            'shop' => 'product',
        ]);

    }

    public function boot(): void
    {
        // Give the Laravel facade a unique alias to avoid conflict
        AliasLoader::getInstance()->alias('CloudinaryFacade', Cloudinary::class);

        Model::unguard();
        $this->registerCustomBladeDirectives();
        $this->registerMigrationMacros();
        $this->registerApiResponseMacros();
        $this->registerCarbonMacro();
        $this->registerCacheableApplicationModels();

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

    public function registerCarbonMacro()
    {
        Carbon::macro('greet', fn () => match (true) {
            ($hour = now()->format('H')) < 12 => 'Morning',
            $hour < 17 => 'Afternoon',
            default    => 'Evening'
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

    public function registerCacheableApplicationModels()
    {
        $this->app->bind('categories',
            fn () => Category::latest('relevance')->withWhereHas('subCategories')->get() // Todo: Cache forever
        );

        $this->app->bind('locations',
            fn () => Location::whereNotNull('featured_at')->get() // Todo: Cache forever
        );

        $this->app->bind('featured_products',
            fn () => Product::featured()->whereHas('image')->get() // Todo: Cache forever
        );
    }

        public function registerCustomBladeDirectives()
    {
        Blade::if('admin', function (?User $user = null) {
            return ($user ?? user())->isAdmin();
        });

        Blade::if('customer', function (?User $user = null) {
            return ($user ?? user())->isCustomer();
        });

        Blade::directive('money', function ($expression) {
            return "<?php echo number_format($expression) ?>";
        });
    }
}
