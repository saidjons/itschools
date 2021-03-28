<?php

use App\Http\Controllers\TGBotController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('udema.home');
});

Route::get('/courses', function () {
    return view('udema.courseList');
});

Route::get('/courses/view', function () {
    return view('udema.courseDetail');
});

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


Route::post('/tg/bot/9393939302-1lwlw0',[TGBotController::class,'hello']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// here starts 

