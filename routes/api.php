<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Authentication routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Article routes
Route::post('/article', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/article', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show');
