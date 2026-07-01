<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\FormSubmission;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats =[
            'pages' => Page::count(),
            'forms' => FormSubmission::count(),
            'users' => User::count(),
        ];
        return view('backend.dashboard', compact('stats'));
    }
}