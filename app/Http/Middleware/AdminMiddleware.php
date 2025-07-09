<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Factory as AuthFactory;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
{

       if (Auth::check() && Auth::user()->is_admin)
 {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}





