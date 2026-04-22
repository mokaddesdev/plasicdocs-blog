<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/blogs', function(){
    return view('blogs');
});

Route::get('/single-blog', function(){
    return view('single-blog');
});