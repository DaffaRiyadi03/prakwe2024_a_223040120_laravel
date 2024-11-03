<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
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
    '/posts/{post:slug}',
    function (Post $post) {

        return view('post', ['tittle' => 'Single Post', 'post' => $post]);
    }
);

Route::get(
    '/authors/{user}',
    function (User $user) {

        return view('posts', ['tittle' => 'Article by' . $user->name, 'posts' => $user->posts]);
    }
);


Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact']);
});
