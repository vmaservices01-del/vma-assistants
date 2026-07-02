<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class FrontendPasswordController extends Controller
{
    public function showForm()
    {
        // If already authenticated, redirect to homepage
        if (session('frontend_authenticated') === true) {
            return redirect('/');
        }
        
        return view('frontend-password');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        $passwordSetting = Setting::where('key', 'frontend_password')->first();
        $savedPassword = $passwordSetting ? $passwordSetting->value : null;

        if ($savedPassword && $request->password === $savedPassword) {
            // Store authorization flag in session
            session(['frontend_authenticated' => true]);
            
            return redirect()->intended('/');
        }

        return back()->withErrors(['password' => 'Incorrect password. Please try again.']);
    }
}