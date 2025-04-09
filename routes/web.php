<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;

// Movie routes
Route::get('/', [MovieController::class, 'index']);
Route::get('/movie/create', [MovieController::class, 'create']);
Route::post('/movie', [MovieController::class, 'store']);

// Review routes
Route::post('/movie/{movie}/review', [ReviewController::class, 'store']);

require __DIR__.'/auth.php';
