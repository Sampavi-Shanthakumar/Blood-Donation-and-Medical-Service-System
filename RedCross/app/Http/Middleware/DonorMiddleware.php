<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class DonorMiddleware
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
        if ($request->user() && $request->user()->type = 'donor')
        {
      
        return $next($request);
        
}
}
}