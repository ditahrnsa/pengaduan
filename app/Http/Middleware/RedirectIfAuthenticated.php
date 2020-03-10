<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
   
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
           if (Auth::user()->level == 'petugas') {
               return redirect()->route('dashboard');
           }else {
               return redirect()->route('laporan.index');
           }
        }

        return $next($request);
    }
}
