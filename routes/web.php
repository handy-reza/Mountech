<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Authors_newsController;
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

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/todo', function () {
    return view('pages.todo');
});

Route::get('/', function () {
    return view('index');
    })->name('dashboard.index');
    Route::resource('news', AuthorsController::class);
    Route::resource('authors', NewsController::class);
    Route::resource('authors_news', Authors_newsController::class);

