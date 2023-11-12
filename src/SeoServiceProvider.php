<?php

    namespace Locomotif\Seo;

    use Illuminate\Routing\Router;
    use Illuminate\Support\ServiceProvider;
    use Locomotif\Seo\Http\Middleware\SeoByUrl;

    class SeoServiceProvider extends ServiceProvider {

        public function boot(Router $router){
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $router->middlewareGroup('seo', [SeoByUrl::class]);
            //$this->loadViewsFrom(resource_path('views/locomotif/admin'), 'admin');
            $this->loadViewsFrom(__DIR__.'/views', 'seo');

            $this->publishes([
                __DIR__.'/views' => resource_path('views/locomotif/seo'),
            ]);
        }

        public function register(){

        }
   }
?>
