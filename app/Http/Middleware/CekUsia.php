<?php

namespace App\Http\Middleware;

use Closure;

class CekUsia
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
        if ($request->in >= 1 && $request->in <= 5){
            view()->share('status', 'Balita' );
        } elseif ($request->in >= 5 && $request->in <= 15) {
            view()->share('status', 'Anak-anak' );
        } else {
            view()->share('status', 'Dewasa' );
        }
        return $next($request);
    }
}
