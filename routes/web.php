<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/game', function () {
    return view('game');
});
Route::get('/article', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/detail-article', function () {
    return view('detailArticle');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
