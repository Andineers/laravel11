<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {

    return view('about');

});

Route::get('/blog', function () {

    return view('blog');

});

Route::get('/contact', function () {

    return view('contact');

});
Route::get('/login', function () {

    return view('login');

});
