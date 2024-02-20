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

//PERCOBAAN 1

//langkah b
Route::get('/hello', function () {
    return 'Hello World';
});

//langkah d
Route::get('/world', function () {
    return 'World';
});

//langkah f
Route::get('/', function () {
    return 'Selamat Datang';
});

//langkah g
Route::get('/about', function () {
    return '<p>Nama : Najwa Azzahra</p>' .
        '<p>NIM : 2241720139</p>';
});

//PERCOBAAN 2

//langkah a
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

//langkah d
Route::get(
    '/posts/{post}/comments/{comment}',
    function ($postId, $commentId) {
        return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
    }
);

//langkah F
Route::get(
    '/articles/{id}',
    function ($idId) {
        return 'Halaman Artikel dengan ID ' . $idId;
    }
);


//PERCOBAAN 3

//langkah a
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});

//langkah d
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

//PERCOBAAN 4

//langkah a
Route::get('/user/profile', function () {
    //
})->name('profile');
