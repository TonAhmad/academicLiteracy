<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about ', [HomeController::class, 'about'])->name('about');
Route::get('/programs ', [HomeController::class, 'programs'])->name('programs');
Route::get('/article ', [HomeController::class, 'article'])->name('article');
Route::get('/strategy ', [HomeController::class, 'strategy'])->name('strategy');
Route::get('/contact ', [HomeController::class, 'contact'])->name('contact');
