<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');
Route::post('/process', [ContactController::class, 'process'])->name('process');
Route::get('/complete', [ContactController::class, 'complete'])->name('complete');
Route::get('/client', [ContactController::class, 'client']);
Route::get('/client', [ContactController::class, 'search']);
Route::post('/delete',[ContactController::class, 'delete']);