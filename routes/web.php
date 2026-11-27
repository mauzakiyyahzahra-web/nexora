<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/services', function () {
    return view('page.services');
});

Route::get('/portfolio', function () {
    return view('page.portfolio');
});

Route::get('/blog', function () {
    return view('page.blog');
});

Route::get('/pricing', function () {
    return view('page.pricing');
});

Route::get('/contact', function () {
    return view('page.contact');
});

Route::get('/blog-details', function () {
    return view('page.blog-details');
});

Route::get('/service-details', function () {
    return view('page.service-details');
});

Route::get('/portfolio-single', function () {
    return view('page.portfolio-single');
});

