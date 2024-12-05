<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GameController;
use App\Models\Article;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Authentication routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Article routes
Route::get('/article', [ArticleController::class, 'indexApi'])->name('articles.indexApi');
Route::get('/article/{id}', [ArticleController::class, 'showApi'])->name('articles.showApi');
Route::post('/article', [ArticleController::class, 'store'])->name('articles.store');

// Game routes
Route::post('/game', [GameController::class, 'store'])->name('games.store');
Route::get('/game', [GameController::class, 'indexApi'])->name('games.indexApi');
// Route::get('/game', [GameController::class, 'indexApi'])->name('games.indexApi');
