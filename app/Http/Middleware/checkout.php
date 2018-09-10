<?php

namespace App\Http\Middleware;

use Closure;

class checkout
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
        if ($request->user()->cart == 0) {
            return redirect(route('menu'));
        }
        return $next($request);
    }
}
