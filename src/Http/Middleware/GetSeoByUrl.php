<?php

namespace Locomotif\Seo\Http\Middleware;

use Closure;

class GetSeoByUrl
{
    public function handle($request, Closure $next)
    {
        echo '<pre>';print_r($request->url());exit;
        
        return $next($request);
    }
}