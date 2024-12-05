<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('home');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/game', function () {
    return view('games.game');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
// Article Route
Route::get('/article', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show');

// Games Route
Route::get('/game', [GameController::class, 'index'])->name('games.index');
Route::get('/game/{id}', [GameController::class, 'show'])->name('games.show');
