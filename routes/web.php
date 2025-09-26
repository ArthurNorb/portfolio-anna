<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::resource('experiencias', ExperienciaController::class);

Route::get('/contato', [ContactController::class, 'index'])->name('contact.index');

Route::post('/contato', [ContactController::class, 'store'])->name('contact.store');

Route::get('/fotos', [FotoController::class, 'index'])->name('fotos.index');