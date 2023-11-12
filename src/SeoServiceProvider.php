<?php
   
    namespace Locomotif\Seo;

    use Illuminate\Routing\Router;
    use Illuminate\Support\ServiceProvider;
    use Locomotif\Seo\Http\Middleware\GetSeoByUrl;

    class SeoServiceProvider extends ServiceProvider {

        public function boot(Router $router){
            
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $router->middlewareGroup('seo', [GetSeoByUrl::class]);
            //$this->loadViewsFrom(resource_path('views/locomotif/admin'), 'admin');
            
        }

        public function register(){
            
        }
   }
?>