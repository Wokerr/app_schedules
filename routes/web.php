<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/payments', function () {
    return view('payments');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/about-me', function () {
    return view('about-me');
});