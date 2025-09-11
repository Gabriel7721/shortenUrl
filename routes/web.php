<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LinkController::class, 'index'])->name('links.index');
Route::post('/links', [LinkController::class, 'store'])->name('links.store');
Route::delete('/links/{link}', [LinkController::class, 'destroy'])->name('links.destroy');

// short url: https://127.0.0.1:8000/r/abc123
Route::get('/r/{code}', RedirectController::class)->name('redirect');
