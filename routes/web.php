<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

Route::get('/shop', function () {
    return view('shop'); 
})->name('shop');

Route::get('/cart', function () {
    return view('cart'); 
})->name('cart');
