<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog', ['posts' => Post::All()]);
});

Route::get('/blog/{slug}', function ($slug) {
    return view('blog-detail', ['post' => Post::find($slug)]);
});

Route::get('/contact', function () {
    return view('contact');
});
