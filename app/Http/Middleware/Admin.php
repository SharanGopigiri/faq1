<?php

namespace App\Http\Middleware;

use Closure;
use http\Env\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->role != 'admin')
        {
            return new Response(view('unauthorized')->with('role', 'ADMIN'));
        }
        return $next($request);
    }
}
