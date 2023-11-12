<?php

    namespace Locomotif\Seo;

    use Illuminate\Routing\Router;
    use Illuminate\Support\ServiceProvider;
    use Locomotif\Seo\Http\Middleware\SeoByUrl;

    class SeoServiceProvider extends ServiceProvider {

        public function boot(Router $router)
        {
            $router->middlewareGroup('seo', [SeoByUrl::class]);
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
            $this->loadViewsFrom(__DIR__.'/views', 'seo');

            $this->publishes([
                __DIR__.'/views' => resource_path('views/locomotif/seo'),
            ]);
        }

        public function register(){

        }
   }
?>
