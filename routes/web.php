<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
  return view('about', ['nama' => 'Sandika']);
});

Route::get('/blog', function () {
  return view('blog');
});

Route::get('/contact', function () {
  return view('contact');
});



// req yang datang dan ini berfungsi sebagai jalur, misal ada about page baru nah taro disini, untuk akses baru gitu
// dan web php sering di pakai
// yg sering di modifikasi routes, view, web, database
// laravel adalah mvc model-view-controller
