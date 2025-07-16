<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {

    // Cuando visitan /admin, redirige a /admin/login
    Route::get('/', fn () => redirect()->route('admin.login'));

    Route::get('/login', fn () => view('admin.login'))->name('admin.login');
    Route::get('/dashboard', fn () => view('admin.dashboard'))->name('admin.dashboard');

});