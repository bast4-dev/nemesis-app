<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
// Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.details');
Route::fallback(function () { return view('errors.not-found'); });

Route::prefix('articles')->name('articles.')->group(function () {

    Route::get('/creer', [ArticleController::class, 'create'])->name('create');
    
    Route::get('/modifier/{id}', [ArticleController::class, 'update'])->name('update');
    
    Route::get('/supprimer/{id}', [ArticleController::class, 'delete'])->name('delete');
    
    Route::get('/{id}', [ArticleController::class, 'show'])->name('show');

});