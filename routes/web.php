<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ----- Praktikum 1 -----

// Route::get('/', function () {
//     echo 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return view('welcome');
// });

// Route::get('/articles/{id} ', function ($id) {
//     echo 'Ini adalah haalaman Artikel dengan ID: ' . $id;
// });

// ----- Praktikum 2 -----

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']); 

// ----- Praktikum 3 -----

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return view('marbeledugames', [
            "title" => ''
        ]);
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return view('marbelandfriendskidsgames', [
            "title" => ''
        ]);
    });
    Route::get('/riri-story-books', function () {
        return view('riristorybooks', [
            "title" => ''
        ]);
    });
    Route::get('/kolak-kids-songs', function () {
        return view('kolakkidssongs', [
            "title" => ''
        ]);
    });
});   

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return view('karir', [
            "title" => ''
        ]);
    });
    Route::get('/magang', function () {
        return view('magang', [
            "title" => ''
        ]);
    });
    Route::get('/kunjungan-industri', function () {
        return view('kunjunganindustri', [
            "title" => ''
        ]);
    });
});  

Route::get('/news', function () {
    return view('news', [
        "title" => "news"
    ]);
});

Route::get('/news/{berita}', function ($berita) {
    return view($berita, [
        "title" => ''
    ]);
});

Route::get('/about-us', function () {
    return view('aboutus', [
        "title" => "aboutus"
    ]);
});
