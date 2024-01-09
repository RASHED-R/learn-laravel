<?php

use Illuminate\Support\Facades\Route;

// name route

Route::get('/', function () {
    return view('home');
})->name('home-page');

Route::get('about/our-team', function () {
    return view('team');
})->name('team');

Route::get('about/about-us', function () {
    return view('about');
})->name('about');
