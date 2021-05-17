<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
//debug Start
use Illuminate\Support\Facades\Log;
//debug end


class Authenticate extends Middleware
{

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
      //debug Start
    if (app()->environment('local')) {
    $log = [
      'where' => 'Authenticate2',
      'URI' => $request->getUri()
    ];
    Log::info(json_encode($log));
    }
    //debug end
        if (! $request->expectsJson()) {
            return route('login', [ 'lang' => app()->getLocale()]);
        }
    }
}
