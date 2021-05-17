<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdjustLocate
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
      //debug Start
if (app()->environment('local')) {
    $log = [
        'where' => 'AdjustLocate2',
        'URI' => $request->getUri()
    ];
    Log::info(json_encode($log));
}
      //debug end
        if (!($request->segment(1) == 'en' ||
              $request->segment(1) == 'pt-br' ||
              $request->segment(1) == 'xx' ||
              $request->segment(1) == 'livewire') ) {//There is NO locale
          if ($request->path() == '/') {
            $url_full =config('app.url') . '/xx';
          } else {
            $url_full =config('app.url') . '/xx/' . $request->path();
          }
          return redirect($url_full);// it will come back to this middleware
        }
        return $next($request);
    }
}
