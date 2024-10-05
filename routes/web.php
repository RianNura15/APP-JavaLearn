<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\UserController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('LandingPage');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/coba2', [CobaController::class, 'show']);
Route::get('/user', [UserController::class, 'show']);
Route::get('/detail', [UserController::class, 'detail']);
