<?php

namespace App\Models;

use Illuminate\Support\Arr;

use function Pest\Laravel\post;

class Post
{

    public static function All()
    {
        return [
            [
                'title'  => 'Judul Post Pertama',
                'slug'   => 'judul-post-pertama',
                'author' => 'Edo Sudrajat',
                'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
            ],
            [
                'title'  => 'Judul Post Kedua',
                'slug'   => 'judul-post-kedua',
                'author' => 'Tobi',
                'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
            ],
            [
                'title'  => 'Judul Post Ketiga',
                'slug'   => 'judul-post-ketiga',
                'author' => 'Paijo',
                'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first((static::All($slug)), fn($post) => $post['slug'] === $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
