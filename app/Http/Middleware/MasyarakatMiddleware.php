<?php

namespace App\Http\Middleware;

use Closure;

class MasyarakatMiddleware
{

    public function handle($request, Closure $next)
    {
        if (Auth::user()->level != 'masyarakat') {
            abort(403);
        }

        return $next($request);
    }
}
