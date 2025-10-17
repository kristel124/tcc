<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_type === 'user') {
            return $next($request);
        }

        abort(403, 'Unauthorized access.');
    }
}
