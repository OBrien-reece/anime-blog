<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeBlogController;
use App\Http\Controllers\AnimeCharacterController;

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

Route::resource('/blog', AnimeBlogController::class);
Route::resource('/character', AnimeCharacterController::class);




