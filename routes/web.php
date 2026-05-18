<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home.index');
});

Route::get('/blogs', function(){
    return view('frontend.pages.blogs.index');
});

Route::get('/single-blog', function(){
    return view('frontend.pages.single-blog.index');
});