<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia::render('home');
});
Route::get('/about', function () {
    return inertia::render('about');
});
Route::get('/contact', function () {
    return inertia::render('contact');
});
