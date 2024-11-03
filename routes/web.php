<?php

use App\Models\Post;
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
        'posts' => Post::all()
    ]);
});

Route::get(
    '/posts/{slug}',
    function ($slug) {

        $post = Post::find($slug);
        return view('post', ['tittle' => 'Single Post', 'post' => $post]);
    }
);

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact']);
});
