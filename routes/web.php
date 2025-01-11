<?php

// use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
// use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


/*================================ DIVISION ==============================*/

// HOME ROUTE
Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('Register'),
    ]);
});




//TODO: Privacy Policy and Terms of Service - own page? if so then links back don't work ....
// Privacy Policy Page
Route::get('/privacy-policy', function () {
    return Inertia::render('PrivacyPolicy');
});

// Terms of Service Page
// TODO: terms of service update
Route::get('/terms-and-conditions', function () {
    return Inertia::render('TermsAndConditions');
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
