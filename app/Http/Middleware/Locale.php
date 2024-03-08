<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('locale'))
        {
            session()->put('locale', $request->getPreferredLanguage($this->languages));
        }
        app()->setLocale(session('locale'));

        return $next($request);
    }
}
