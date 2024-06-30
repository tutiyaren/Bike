<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClearUserSessionRegister
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $allowedRoutes = [
            'register',
            'password',
            'register.process',
            'password.process'
        ];

        $currentRoute = $request->route()->getName();

        if (!in_array($currentRoute, $allowedRoutes)) {
            Session::forget('name');
            Session::forget('email');
        }

        return $next($request);
    }
}
