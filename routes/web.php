<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ComicController;
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

Route::get('/', [PageController::class, 'index'])->name('home');


// Rotta resources, ovvero il collegamento con il controller creato con php artisan make:controller {NomeController} -r

Route::resource('comics', ComicController::class);