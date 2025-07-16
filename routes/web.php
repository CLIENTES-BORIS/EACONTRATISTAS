<?php

use Illuminate\Support\Facades\Route;

// Rutas del sitio web
Route::prefix('/')->group(function () {
    Route::get('/', fn () => view('site.inicio'))->name('site.inicio');
    Route::get('/nosotros', fn () => view('site.nosotros'))->name('site.nosotros');
    Route::get('/servicios', fn () => view('site.servicios'))->name('site.servicios');
    Route::get('/proyectos', fn () => view('site.proyectos'))->name('site.proyectos');
    Route::get('/contacto', fn () => view('site.contacto'))->name('site.contacto');
});