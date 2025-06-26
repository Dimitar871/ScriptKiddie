<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::view('/', 'home')->name('home');

Route::get('/forgot-password', [\App\Http\Controllers\Auth\PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [\App\Http\Controllers\Auth\PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [\App\Http\Controllers\Auth\NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [\App\Http\Controllers\Auth\NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::resource('notes', NoteController::class);
   
});

require __DIR__.'/auth.php';
