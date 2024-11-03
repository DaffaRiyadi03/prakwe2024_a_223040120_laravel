<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-1',
                'tittle' => 'Judul 1',
                'author' => 'Daffa',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem impedit
            numquam nam amet
            cupiditate consectetur totam praesentium soluta quaerat magnam ex, voluptates, expedita omnis incidunt
            officiis delectus aliquid quasi reprehenderit.',
            ],
            [
                'id' => '2',
                'slug' => 'judul-2',
                'tittle' => 'Judul 2',
                'author' => 'Daffa',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem impedit
                numquam nam amet
                cupiditate consectetur totam praesentium soluta quaerat magnam ex, voluptates, expedita omnis incidunt
                officiis delectus aliquid quasi reprehenderit.',
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            aborted(404);

            return $post;
        }
    }
}

?>