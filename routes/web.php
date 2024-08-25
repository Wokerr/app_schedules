<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('principal');
});

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/payments', function () {
    return view('payments');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/about-me', function () {
    return view('about-me');
});

// Route::get('/register', function () {
//     return view('auth.register');
// });