<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;  

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', [LoginController::class, 'landing'])->name('welcome'); 

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::post('/users/scopes', [UserController::class, 'scopes'])->name('users.scopes');
Route::post('/scopes', [UserController::class, 'createScope'])->name('scopes.store');