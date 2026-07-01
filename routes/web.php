<?php

use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\Backend\DashboardController; 
use App\Http\Controllers\Backend\PageController; 
use App\Http\Controllers\Backend\UserController; 
use App\Http\Controllers\BlogController; 
use App\Http\Controllers\Backend\PostController; 
use App\Http\Controllers\Backend\MediaController; 
use App\Http\Controllers\Backend\FormSubmissionController;
use App\Http\Middleware\FrontendPasswordMiddleware;
use Illuminate\Support\Facades\Route; 
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/site-password', function () {
    return view('site-password');
})->name('frontend.password');

Route::post('/site-password', function (Request $request) {

    $request->validate([
        'password' => 'required'
    ]);

    if ($request->password === "12345") {

        session(['frontend_unlocked' => true]);

        return redirect(session('url.intended', '/'));
    }

    return back()->withErrors([
        'password' => 'Incorrect password.'
    ]);
})->name('frontend.password.submit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard 
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

// Backend Admin Routes 
Route::prefix('backend')->name('backend.')->middleware(['auth'])->group(function () { 
     
    // Pages Module (SEO, Slugs, Schema, Images) 
    Route::resource('pages', PageController::class); 
    // Forms Module (View & Export) 
    Route::get('/forms', [FormSubmissionController::class, 'index'])->name('forms.index'); 
    Route::get('/forms/export', [FormSubmissionController::class, 'export'])->name('forms.export'); 
    Route::get('/forms/{id}', [FormSubmissionController::class, 'show'])->name('forms.show'); 

    // <--- ADD THIS LINE 
    Route::post('/submit-discovery-call', [FormSubmissionController::class, 'storeDiscoveryCall'])->name('discovery.submit');
    Route::delete('/forms/delete-multiple', [FormSubmissionController::class, 'destroyMultiple'])->name('forms.destroyMultiple'); 
    Route::delete('/forms/{id}', [FormSubmissionController::class, 'destroy'])->name('forms.destroy'); 

    // User Module (Profile Management) 
    Route::get('/users',[UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit'); 
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update'); 

    //Media 
    Route::resource('media', MediaController::class)->names('media');


    Route::get('/blogs', [PostController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [PostController::class, 'create'])->name('blogs.create');
    Route::post('/blogs/store', [PostController::class, 'store'])->name('blogs.store');

    // NEW ROUTES FOR EDITING
    Route::get('/blogs/{id}/edit', [PostController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}/update', [PostController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [PostController::class, 'destroy'])->name('blogs.destroy');

});


require __DIR__.'/auth.php';


Route::middleware('frontend.password')->group(function () {
    // Redirect /home to /
    Route::permanentRedirect('/home', '/');

    // Your actual homepage route
    Route::get('/', [PageController::class, 'homepage'])->name('home');
    // Blog Routes
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

    // Service Routes
    Route::get('/services/{slug}', [PageController::class, 'showService'])->name('services.show');



    Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');

    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

});
