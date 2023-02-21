<?php

use Illuminate\Support\Facades\Route;

// richiamo il CONTROLLER

use App\Http\Controllers\ComicController as ComicController;

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

// CHARACTERS

Route::get('/characters}', [ComicController::class, 'characters'])->name('characters');

// COMICS

Route::get('/comics/{slug}', [ComicController::class, 'detailComics'])->name('detail-comics');

// HOMEPAGE

Route::get('/', [ComicController::class, 'index'])->name('homepage');


