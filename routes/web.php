<?php

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home', [
        'user' => Auth::user()
    ]);
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/game', function () {
    return view('games.game');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
});
// Article Route
Route::get('/article', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show');

// Games Route
Route::get('/game', [GameController::class, 'index'])->name('games.index'); // Bisa diakses tanpa login
Route::middleware(['auth:sanctum'])->get('/game/{id}', [GameController::class, 'show'])->name('games.show'); // Harus login untuk mengakses

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
