<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DebugController;
use App\Http\Controllers\UploadController;

use App\Models\Material;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/debug',[DebugController::class,'index']);


//Guest-only
Route::middleware(['guest'])->group(function() {
    Route::get('/login', [SessionController::class, 'index']);
    Route::post('/login', [SessionController::class, 'login']);
});

// TEMPORARY - Delete later
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/post/{material:id}', function(Material $material){
    return view('post', ['material' => $material]);
});

//Log Out
Route::post('/logout', [SessionController::class, 'logout'])->middleware('auth')->name('logout');

//Untuk autentikasi Role Guru
Route::middleware(['auth', 'role:guru'])->group(function(){
    Route::get('/guru', [GuruController::class, 'index']);
    // Route::post('/upload', function () {
    //     return view('guru.upload');
    // });

     Route::get('/upload', [UploadController::class,'index'])->name('upload.index');
    Route::post('/upload', [UploadController::class,'store'])->name('upload.store');

});




//Untuk Autentikasi Role Murid
Route::middleware(['auth', 'role:murid'])->group(function(){
    Route::get('/murid', [MuridController::class, 'index']);
    // Code di sini
});

//Bagian EXPLORE dan POSTS
Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
Route::get('/posts', [PostsController::class, 'index'])->name('post.index');
Route::get('/material/{material}', [MaterialController::class, 'show'])->name('materials.show');


