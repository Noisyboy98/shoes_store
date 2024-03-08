<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
//    private function __construct() {
//        $this->languages = ['vi'];
//    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('locale')) {
            session()->put('locale', $request->getPreferredLanguage([]));
        }
        app()->setLocale(session('locale'));

        return $next($request);
    }
}
