<?php

namespace App\Http\Middleware;

use Closure;

class PetugasMiddleware
{

    public function handle($request, Closure $next)
    {
        if($this->auth->user()->level == 'petugas'){
            if (Auth::user()->petugas[0]->level == 'petugas') {
                return $next($request);
            }else {
                abort (403);
            }
        }else{
            abort (403);
        }
    }
}
