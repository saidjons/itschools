<?php

use App\Http\Controllers\TGBotController;
use App\Http\Livewire\LeadGeneratorForm;
use Illuminate\Support\Facades\Route;

 

Route::get('/', function () {
    return view('tui.landing');
    // https://play.tailwindcss.com/8J4yR7TXmS
});


Route::get('/register',LeadGeneratorForm::class);

Route::get('/courses', function () {
    return view('tui.course-list');
});

Route::get('/courses/show', function () {
    return view('tui.video-show');
});




// udema template
Route::get('/contact', function () {
    return view('udema.contact');
});

Route::get('/faq', function () {
    return view('udema.faq');
});

Route::get('/pricing', function () {
    return view('udema.pricing');
});

Route::get('/help', function () {
    return view('udema.help');
});


Route::get('/about', function () {
    return view('udema.about');
});


Route::post('/9393939302-1lwlw0/tg',[TGBotController::class,'hello']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// here starts 

