<?php
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
Route::get('/', [IndexController::class, 'index']);
Route::get('/article/{id?}', [IndexController::class, 'show']);