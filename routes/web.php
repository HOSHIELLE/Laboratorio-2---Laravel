<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Autenticación (login, registro, logout)
Auth::routes();

// Rutas protegidas
Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');

Route::get('/dashboard', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');
