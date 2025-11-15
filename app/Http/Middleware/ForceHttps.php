<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        try {
            // Pomiń dla health check endpoint
            if ($request->is('up')) {
                return $next($request);
            }
            
            // Sprawdź czy request nie jest już HTTPS
            // Sprawdź nagłówki reverse proxy (Cloudflare, nginx, etc.)
            $isSecure = $request->secure() || 
                       $request->header('X-Forwarded-Proto') === 'https' ||
                       $request->server('HTTP_X_FORWARDED_PROTO') === 'https' ||
                       $request->server('HTTPS') === 'on';
            
            if (!$isSecure) {
                // Przekieruj na HTTPS
                $url = 'https://' . $request->getHttpHost() . $request->getRequestUri();
                return redirect($url, 301);
            }
        } catch (\Exception $e) {
            // W przypadku błędu, po prostu kontynuuj request
            // Loguj błąd, ale nie przerywaj działania aplikacji
            Log::warning('ForceHttps middleware error: ' . $e->getMessage());
        }

        return $next($request);
    }
}

