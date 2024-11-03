<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['tittle' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Daffa Riyadi', 'tittle' => 'contact']);
});

Route::get('/posts', function () {
    return view('posts', [
        'tittle' => 'posts',
        'posts' => [
            [
                'id' => '1',
                'slug' => 'judul-1', // Tambahkan kunci 'slug' di sini
                'tittle' => 'Judul 1',
                'author' => 'Daffa',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem impedit
            numquam nam amet
            cupiditate consectetur totam praesentium soluta quaerat magnam ex, voluptates, expedita omnis incidunt
            officiis delectus aliquid quasi reprehenderit.',
            ],
            [
                'id' => '2',
                'slug' => 'judul-2', // Tambahkan kunci 'slug' di sini
                'tittle' => 'Judul 2',
                'author' => 'Daffa',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem impedit
                numquam nam amet
                cupiditate consectetur totam praesentium soluta quaerat magnam ex, voluptates, expedita omnis incidunt
                officiis delectus aliquid quasi reprehenderit.',
            ]
        ]
    ]);
});

Route::get(
    '/posts/{slug}',
    function ($slug) {
        $posts = [
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

        $post = Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view('post', ['tittle' => 'Single Post', 'post' => $post]);
    }
);

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact']);
});
