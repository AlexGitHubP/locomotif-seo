<?php

namespace Locomotif\Seo\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Locomotif\Seo\Models\Seo as SeoModel;
use stdClass;

class SeoByUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $currentUrl = $request->url();
        $segments = explode('/', $currentUrl);
        $lastSegment = last($segments);
        //$lastSegment = str_replace('.html', '', $lastSegment);
        $seoData = SeoModel::where('slug', $lastSegment)->orwhere('url', $lastSegment)->first();
        $seoData = $seoData ?? new stdClass();
        $seoData->title = $seoData->title ?? 'Magazin Mobila | Mese Lemn Masiv | Masara';
        $seoData->keywords = $seoData->keywords ?? 'MASARA, '.$lastSegment;
        $seoData->description = $seoData->description ?? 'Magazin Mobila pentru amenajare interioara. Daca vrei sa cumperi mobila de calitate si cu un aspect placut, apeleaza la noi si la serviciile noastre.';
        $seoData->canonical = $seoData->canonical ?? $request->url();
        $seoData->url = $request->url();

        View::share('seoData', $seoData);

        return $next($request);
    }
}
