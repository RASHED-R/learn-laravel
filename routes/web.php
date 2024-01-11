<?php

use Illuminate\Support\Facades\Route;

//route redirection

// redirection means that sometimes we need to change the url path but path works like previous path.
// i mean that if i change the url path some people who already bookmarked the path so the cannot access the new path
// so that if i use redirection then without changing the the url they can access the same path.



Route::get('/', function () {
    return view('home');
})->name('home-page');

Route::get('about/our-team', function () {
    return view('team');
})->name('team');

Route::get('/main-page', function () {
    return view('main');
});

// Route::get('about/about-us', function () {
//     return view('about');
// })->name('about');

// redirection route

Route::get('/about-company', function () {
    return view('about');
});
Route::get('/tamplete1', function () {
    return view('tamplete1');
});

Route::redirect('/about', '/about-company', 301); //('previous path', 'new path', redirection code)
