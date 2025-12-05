<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Grade;

Route::get('/', function () {
    return view('welcome');
});

//Guest-only
Route::middleware(['guest'])->group(function() {
    Route::get('/test', [SessionController::class, 'index']);
    Route::post('/test', [SessionController::class, 'login']);
});

//Log Out
Route::get('/logout', [SessionController::class, 'logout'])->middleware('auth');

//Role Guru
Route::middleware(['auth', 'role:guru'])->group(function(){
    Route::get('/guru', [GuruController::class, 'index']);
});

Route::middleware(['auth', 'role:murid'])->group(function(){
    Route::get('/murid', [MuridController::class, 'index']);
});

Route::post('/logout', [SessionController::class, 'logout'])->name('logout');


//Gak kepakai Laravel Breezenya:
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
