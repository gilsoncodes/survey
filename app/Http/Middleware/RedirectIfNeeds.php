<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//debug Start
use Illuminate\Support\Facades\Log;
//debug end

class RedirectIfNeeds
{
    public function handle(Request $request, Closure $next)
    {
      //debug Start
if (app()->environment('local')) {
$log = [
  'where' => 'RedirectIfNeeds2',
  'URI' => $request->getUri()
];
Log::info(json_encode($log));
}
//debug end
      //dd($request->url());
      //dd($request->path())
      //dd($request->session()->has('keepLocate'));
      //dd(session('keepLocate'));

        //URL=> domain.com/segment(1)/segment(2)/segment(3)/.../segment(N)
        //path=> /segment(1)/segment(2)/segment(3)/.../segment(N)
        if ($request->segment(1) == 'pt-br') {
          $pathNoWrongLocate = substr($request->path(), 5);
        } else { //'en' or 'xx'
          $pathNoWrongLocate = substr($request->path(), 2);
        }
        if ($request->segment(1) != 'livewire' && $request->segment(1) != 'storage') {
          if ($request->session()->has('keepLocate')) { // exist a locate stored in session
            if ($request->segment(1) != session('keepLocate')) {//There is NO locale
                $url_full = config('app.url') . '/' . session('keepLocate') . $pathNoWrongLocate;
                //I am not sure if it is working. Just in case, I am deleting session
                $request->session()->forget('keepLocate');
                return redirect($url_full);// it will come back to this middleware
            }
          } else {
            if ( $request->segment(1) == 'xx' ) {//There is NO locale in the initial url
                if ($request->path() == '/') {
                  $url_full = config('app.url') . '/en';
                } else {
                  $url_full = config('app.url') . '/en' . $pathNoWrongLocate;
                }
                return redirect($url_full);// it will come back to this middleware
            }
          }
          app()->setLocale($request->segment(1));
        }
        //services, contact, about are to make sure eliminate 'keepLocate' from the session
        if ($request->session()->has('keepLocate')) {
          if ($request->segment(2)."/".$request->segment(3) == "email/verify" ||
            $pathNoWrongLocate == "" ||
            $request->segment(2) == "dashboard" ||
            $request->segment(2) == "services" ||
            $request->segment(2) == "contact" ||
            $request->segment(2) == "about" )
          {
                    $request->session()->forget('keepLocate');
          }
        }
        return $next($request);
    }
}
