<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     echo 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return view('welcome');
// });

// Route::get('/articles/{id} ', function ($id) {
//     echo 'Ini adalah haalaman Artikel dengan ID: ' . $id;
// });

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']); 
