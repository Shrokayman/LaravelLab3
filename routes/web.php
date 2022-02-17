<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {return view('welcome');});
// Route::get('/posts' ,[PostController::class ,"index"])->name('posts');
// Route::get('/posts/{id}' ,[PostController::class , "show"])->where('id' , '[0-9]+')->name('posts.show');
// Route::get('/posts/{id}/edit' ,[PostController::class , "edit"])->name('posts.edit');
// Route::post('/posts/{id}' , [PostController::class , "update"]);
// Route::post('/posts/{id}' ,[PostController::class , "destroy"]);
// Route::get('/posts/create' ,[PostController::class , "create"]);
// Route::post('/posts' ,[PostController::class , "store"]);


Route::resource('posts' , PostController::class);
Route::resource('users' , UserController::class);
