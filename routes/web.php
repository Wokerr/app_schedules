<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/',[RegisterController::class, 'index']);

Route::get('/payments', function () {
    return view('payments');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/about-me', function () {
    return view('about-me');
});

Route::get('/register', function () {
    return view('auth.register');
});