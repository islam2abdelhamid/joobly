<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AssignGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null, $redirectTo = '/login')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/' . \App::getLocale() . '/company/login');
        }
        Auth::shouldUse($guard);
        return $next($request);
    }
}
