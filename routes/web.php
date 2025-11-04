<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');