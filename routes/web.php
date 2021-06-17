<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'index']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/blog', function () {
    return view('blog');});

Route::get('/login', function () {
    return view('login');
})->name('dashboard.index');

Route::resource('authors', AuthorController::class);
Route::resource('news', NewsController::class);