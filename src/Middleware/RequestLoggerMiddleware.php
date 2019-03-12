<?php

namespace SonHP\Middleware;

use Illuminate\Support\Facades\Log;

class RequestLoggerMiddleware
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $method = $request->getMethod();
        $url = $request->fullUrl();

        Log::debug(sprintf('METHOD: %s | URL: %s', $method, $url));

        return $next($request);
    }
}