<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\WisataController;

Route::get('/', [WisataController::class, 'home'])
    ->name('home');

Route::get('/wisata', [WisataController::class, 'index'])
    ->name('wisata.index');

Route::get('/wisata/{id}', [WisataController::class, 'show'])
    ->name('wisata.show');