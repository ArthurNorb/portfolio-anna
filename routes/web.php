<?php

use App\Http\Controllers\ExperienciaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/home', 'home')->name('home');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::resource('experiencias', ExperienciaController::class);