<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
 Route::get('/',[WelcomeController::class,'index'])->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Posts
Route::post('/posts/store',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{postId}/show',[PostController::class,'show'])->name('post.show');
Route::get('/posts/all',[HomeController::class,'allPosts'])->name('posts.all');
Route::get('/posts/{postId}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::post('/posts/{postId}/update',[PostController::class,'update'])->name('posts.update');