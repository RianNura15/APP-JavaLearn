<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('LandingPage');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/coba2', [CobaController::class, 'show']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/registrasi', [UserController::class, 'registrasi']);

Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
});

Route::get('/data-peserta', function () {
    return Inertia::render('Admin/DataPeserta');
});

Route::get('/data-pseudo-code', function () {
    return Inertia::render('Admin/DataPseudoCode');
});

Route::get('/data-source-code', function () {
    return Inertia::render('Admin/DataSourceCode');
});

Route::get('/data-level', function () {
    return Inertia::render('Admin/DataLevel');
});

Route::get('/data-nilai', function () {
    return Inertia::render('Admin/DataNilai');
});

Route::get('get-data-peserta', [AdminController::class, 'getDataPeserta']);
Route::get('get-data-level', [AdminController::class, 'getDataLevel']);
Route::get('get-data-pseudocode', [AdminController::class, 'getDataPseudocode']);
Route::get('get-data-sourcecode', [AdminController::class, 'getDataSourcecode']);
