<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ViewAllController;
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
