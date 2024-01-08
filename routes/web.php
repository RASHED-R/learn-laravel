<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/second-page', function () {
//     return view('second');
// });
Route::get('/second-page/second-first', function () {
    return view('secondFirst');
});
// get value from user
Route::get('/second-page/{id?}/comment/{comment?}', function (string $id = null, string $comment = null) {
    if ($id) {
        return "<h1>post id:" . $id . "</h1><h1>comment id:" . $comment . "</h1>";
    } else {
        return "<h1>Id is not found</h1>";
    }
});
