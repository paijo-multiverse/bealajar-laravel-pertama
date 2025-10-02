<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog', [
        'posts' => [
            [
                'title'  => 'Judul Post Pertama',
                'slug'   => 'judul-post-pertama',
                'author' => 'Edo Sudrajat',
                'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
            ],
            [
                'title'  => 'Judul Post Kedua',
                'slug'   => 'judul-post-Kedua',
                'author' => 'Tobi',
                'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
            ],
            [
                'title'  => 'Judul Post Ketiga',
                'slug'   => 'judul-post-Ketiga',
                'author' => 'Paijo',
                'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
            ]
        ]
    ]);
});

Route::get('/blog/{slug}', function ($slug) {

    $posts = [
        [
            'title'  => 'Judul Post Pertama',
            'slug'   => 'judul-post-pertama',
            'author' => 'Edo Sudrajat',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
        [
            'title'  => 'Judul Post Kedua',
            'slug'   => 'judul-post-Kedua',
            'author' => 'Tobi',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
        [
            'title'  => 'Judul Post Ketiga',
            'slug'   => 'judul-post-Ketiga',
            'author' => 'Paijo',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ]
    ];

    $post = Arr::first(($posts), fn($post) => $post['slug'] === $slug);

    // $post = Arr::first(($posts), function ($post) use ($slug) {
    //     return $post['slug'] === $slug;
    // });

    return view('blog-detail', ['post' => $post]);
});

Route::get('/contact', function () {
    return view('contact');
});
