<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetLocateAndDefaultForUrls
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        app()->setLocale($request->lang);//example.com/xx/about => set the site language to xx
        URL::defaults(['lang' => $request->lang]);// route('about') => example.com/xx/about
        return $next($request);
    }
}
