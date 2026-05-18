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
Route::get('/homecomp', [PostController::class, 'homecomp']);
Route::get('/compon', [PostController::class, 'compon']);
Route::get('/category', [PostController::class, 'category']);
Route::get('/', HomeController::class)->name('home');


// Route::get('/posts',function(){
// $posts= App\Models\Post::all();
// return $posts;
// });


// Route::get('/posts',function(){
// $posts= App\Models\Post::create([
//     'user_id' => 1,
//     'category_id' => null,
//     'title' => 'd Post',
//     'content' => 'This is the content of the five post.',
//     'slug' => 'd-post',
//     'excerpt' => 'This is the excerpt of the five post.',
//     'cover_image' => null,
//     'status' => 'published',
// ]);
// $posts->save();
// dd($posts);
// });



// Route::get('/posts',function(){
// $posts= App\Models\Post::query()
// ->where('status','=','published')
// ->get();
// dd($posts);
// });
