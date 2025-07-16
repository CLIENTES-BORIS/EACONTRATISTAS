<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {

    // Cuando visitan /admin, redirige a /admin/login
    Route::get('/', fn () => redirect()->route('admin.layout/auth'));

    Route::get('/login', fn () => view('admin.auth.login'))->name('admin.auth.login');
    Route::get('/dashboard', fn () => view('admin.main.dashboard'))->name('admin.main.dashboard');

});