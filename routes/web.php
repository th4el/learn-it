<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Guest-only
Route::middleware(['guest'])->group(function() {
    Route::get('/login', [SessionController::class, 'index']);
    Route::post('/login', [SessionController::class, 'login']);
});

//Log Out
Route::post('/logout', [SessionController::class, 'logout'])->middleware('auth')->name('logout');

//Untuk autentikasi Role Guru
Route::middleware(['auth', 'role:guru'])->group(function(){
    Route::get('/guru', [GuruController::class, 'index']);
    // Code di sini
});

//Untuk Autentikasi Role Murid
Route::middleware(['auth', 'role:murid'])->group(function(){
    Route::get('/murid', [MuridController::class, 'index']);
    // Code di sini
});

