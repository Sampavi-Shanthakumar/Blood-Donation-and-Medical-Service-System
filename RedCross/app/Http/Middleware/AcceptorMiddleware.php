<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;
use session;
class AcceptorMiddleware
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
        if ($request->user() && $request->user()->type = 'acceptor')
{

return $next($request);
    }
}
}