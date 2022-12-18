<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeBlogController;

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

Route::get('/', 'App\Http\Controllers\AnimeBlogController@index');

Route::resource('/blog', AnimeBlogController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\AnimeBlogController::class, 'index'])->name('home');
