<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Sprawdź czy request nie jest już HTTPS
        // Działa w środowisku produkcyjnym lub gdy FORCE_HTTPS jest włączone
        $forceHttps = config('app.env') === 'production' || env('FORCE_HTTPS', false);
        
        if ($forceHttps && !$request->secure()) {
            // Przekieruj na HTTPS
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}

