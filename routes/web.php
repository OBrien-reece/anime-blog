<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ViewAllController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PagesController;
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

Auth::routes();

Route::get('/', 'App\Http\Controllers\AnimeController@index');

Route::resource('/blog', 'App\Http\Controllers\AnimeController', ['except' => ['show', 'edit']]);

Route::get('/blog/{anime}', [AnimeController::class, 'show']);

Route::get('/blog/{anime}/edit', [AnimeController::class, 'edit']);

Route::get('/ongoing_anime_blogs', [ViewAllController::class, 'show_ongoing'])->name('ongoing');

Route::get('/completed_anime_blogs', [ViewAllController::class, 'show_completed'])->name('completed');

Route::resource('/comment', CommentController::class);

Route::get('/about', [PagesController::class, 'show_about']);

Route::get('/contact_us', [PagesController::class, 'contact_us']);

Route::get('/my_profile', [PagesController::class, 'view_profile'])->name('profile');

Route::resource('/user', 'App\Http\Controllers\PagesController');

Route::resource('/details', 'App\Http\Controllers\UpdateUserDetailsController');
