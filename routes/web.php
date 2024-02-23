<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
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

//controller

//controller PageController
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

//PERCOBAAN VIEWS

//perubahan route setelah hello.blade.php dipindahkan
Route::get('/greeting', [WelcomeController::class, 'greeting']);