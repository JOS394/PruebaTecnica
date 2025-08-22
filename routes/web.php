<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EmktController;
use App\Http\Controllers\HomeController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Menu API Routes
Route::get('/menu', [MenuController::class, 'getMenu']);
Route::get('/menu-view', function () {
    return view('menu');
});

// EMKT Routes
Route::get('/somos-emkt', [EmktController::class, 'index'])->name('emkt.index');
Route::post('/somos-emkt/store', [EmktController::class, 'store'])->name('emkt.store');
