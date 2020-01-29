<?php

namespace TotalPHP\MeetUp\Http\Middleware;

use Closure;

class AjaxOnlyMiddleware
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
        if ($request->ajax() || $request->wantsJson()) {
            return $next($request);
        } else {
            return response()->json(['Not Allowed'], 405);
        }

    }
}
