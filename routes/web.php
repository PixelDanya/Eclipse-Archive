<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\FeedbackController;

// Статические страницы
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/feedback', [PageController::class, 'feedback'])->name('feedback');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Динамический поиск
Route::get('/api/search', [ApiController::class, 'search']);

// Отправка формы
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

// 404 страница
Route::fallback(function () {
    abort(404);
});