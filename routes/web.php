<?php
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::prefix('articles')->group(function () {
    Route::get('/creer', [ArticleController::class, 'create'])->name('article.create');
    Route::get('/modifier/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::get('/supprimer/{id}', [ArticleController::class, 'delete'])->name('article.delete');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('article.show');
});
Route::fallback(function () {
    return view('errors.not-found');
});