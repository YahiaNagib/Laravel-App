<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('posts', [App\Http\Controllers\PostController::class, 'store']);

Route::get('posts/{post}', [App\Http\Controllers\PostController::class, 'show']);
Route::get('posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::patch('posts/{post}', [App\Http\Controllers\PostController::class, 'update']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/{id}', [App\Http\Controllers\ProfilesContoller::class, 'profile'])->name('profile');

