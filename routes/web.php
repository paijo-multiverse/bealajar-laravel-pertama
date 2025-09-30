<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Edo'
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
