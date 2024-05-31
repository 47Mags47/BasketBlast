<?php

use App\Http\Controllers\papersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntranceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/index', [papersController::class, 'index'])->name('home');

Route::get('/posts', [PostsController::class, 'index'])->name('posts');

Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');

Route::get('/entrance', [EntranceController::class, 'index'])->name('entrance');