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

// CHARACTERS

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// COMICS

Route::get('/comics/{id}', function ($id) {    
    $comics = config('db.cards');
    $icon = config('db.icon');
    $social = config('db.social');
    foreach($comics as $key => $comic){
        if($key == $id){
            $single = $comic;
        }

    // altro metodo con USE

    // $comics = config('db.cards');
    // $icon = config('db.icon');
    // $social = config('db.social');
    // $single = array_filter($comics, function($item) use($id)){
    //     return $item['id'] == $id
    // }


    }
    return view('detail_comics', compact('comics', 'icon', 'social', 'single'));
})->name('detail-comics');

// HOMEPAGE

Route::get('/', function () {
    $cards = config('db.cards');
    $icon = config('db.icon');
    $social = config('db.social');

    return view('index', compact('cards', 'icon', 'social'));
})->name('homepage');
