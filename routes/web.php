<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',function (){
//     return"hello alaa";
// });

Route::get('/home', [PostController::class, 'index']);
Route::get('/single', [PostController::class, 'single']);
Route::get('/', HomeController::class)->name('home');
