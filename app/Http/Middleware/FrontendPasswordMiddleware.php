<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Setting;
use Symfony\Component\HttpFoundation\Response;

class FrontendPasswordMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Retrieve the password from the database
        $passwordSetting = Setting::where('key', 'frontend_password')->first();
        $password = $passwordSetting ? $passwordSetting->value : null;

        // If no password is configured in the database, bypass the protection
        if (empty($password)) {
            return $next($request);
        }

        // Check if the user is already authenticated in their current session
        if ($request->session()->get('frontend_authenticated') === true) {
            return $next($request);
        }

        // If not authenticated, redirect to the password prompt
        return redirect()->route('frontend.password.form');
    }
}