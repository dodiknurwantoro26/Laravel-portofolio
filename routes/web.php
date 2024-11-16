<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AppController::class, 'index'])->name('landing');
Route::get('/login', [AppController::class, 'login'])->name('login');
Route::post('/auth', [AppController::class, 'auth'])->name('auth');

Route::post('/contens/hero', [ContentController::class, 'update_hero'])->name('contents.update.hero');
