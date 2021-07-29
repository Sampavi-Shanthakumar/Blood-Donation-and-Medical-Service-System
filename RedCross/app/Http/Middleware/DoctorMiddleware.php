<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class DoctorMiddleware
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
        if ($request->user() && $request->user()->type = 'doctor')
        {
       
        return $next($request);
    }
}
}