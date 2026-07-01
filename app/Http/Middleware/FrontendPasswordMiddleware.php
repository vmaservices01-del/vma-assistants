<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontendPasswordMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Allow access to the password page and form submission
        if ($request->is('site-password') || $request->is('site-password/*')) {
            return $next($request);
        }

        // Allow logged-in admins (optional)
        if (auth()->check()) {
            return $next($request);
        }

        // Check if the frontend password has been verified
        if (!session('frontend_unlocked')) {
            session(['url.intended' => url()->full()]);
            return redirect()->route('frontend.password');
        }

        return $next($request);
    }
}