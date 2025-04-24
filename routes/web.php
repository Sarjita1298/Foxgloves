<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[ HomeController::class, 'index'] )->name('index');
Route::get('/about',[ HomeController::class, 'about'] )->name('about');
Route::get('/service',[ HomeController::class, 'service'] )->name('service');
Route::get('/contact',[ HomeController::class, 'contact'] )->name('contact');
Route::post('/contact/store', [HomeController::class, 'storeContact'])->name('contact.store');

Route::post('/subscribe', [HomeController::class, 'store'])->name('subscribe');

Route::get('/our_profile',[ HomeController::class, 'our_profile'] )->name('our_profile');
Route::get('/our_mission',[ HomeController::class, 'our_mission'] )->name('our_mission');
Route::get('/training_development',[ HomeController::class, 'training_development'] )->name('training_development');

Route::get('/guest-catering-canteen',[ HomeController::class, 'guest_catering_canteen'] )->name('guest-catering-canteen');
Route::get('/staff_turnkey',[ HomeController::class, 'staff_turnkey'] )->name('staff_turnkey');
Route::get('/our_commitment',[ HomeController::class, 'our_commitment'] )->name('our_commitment');
