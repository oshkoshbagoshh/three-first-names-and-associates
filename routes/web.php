<?php

// use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;

// use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


/* ================================ DIVISION ============================== */

// HOME ROUTE
Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('Register'),
    ]);
});

// TODO: 
// EMPLOYEE SKILL CARD ROUTE:
Route::get('/nathan', function() {
    return Inertia::render('NathanScottProfile.vue');
});

Route::get('/mock', function() {
    return Inertia::render('Mock');
});

// =====================================================
Route::group(['prefix' => 'legal'],
    function () {
        Route::get('/privacy-policy', function () {
            return Inertia::render('Legal/PrivacyPolicy');
        })->name('legal.privacy');

        Route::get('/terms-and-conditions', function () {
            return Inertia::render('Legal/TermsAndConditions');
        })->name('legal.terms');
    });


// ================================
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ====================  comment ==============
// TODO: add meeting controller
Route::get('/meeting', [MeetingController::class, 'index'])->name('meeting.index');


// ====================  comment ==============
// TODO: Add admin and auth
// Admin routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('posts', AdminPostController::class)->except(['show']);
});




// ====================  comment ==============
////TODO: Feature - Chatbot
////  Botman Route
//Route::post('/botman', 'BotmanController@handle');
//Route::get('/botman', 'BotmanController@startConversation');


require __DIR__ . '/auth.php';
