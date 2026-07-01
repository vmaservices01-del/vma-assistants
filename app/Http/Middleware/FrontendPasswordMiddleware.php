<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontendPasswordMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // ALWAYS allow password page (GET + POST)
        if ($request->routeIs('frontend.password') || $request->routeIs('frontend.password.submit')) {
            return $next($request);
        }

        // Allow logged-in admins
        if (auth()->check()) {
            return $next($request);
        }

        // Check session
        if (!session()->has('frontend_unlocked')) {
            session(['url.intended' => url()->full()]);
            return redirect()->route('frontend.password');
        }

        return $next($request);
    }
}