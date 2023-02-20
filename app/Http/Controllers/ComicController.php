<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// richiamo MODEL

use App\Models\Comic as Comic;

class ComicController extends Controller
{

    // HOMEPAGE

    public function index(){
        $comics = Comic::all();
        $icon = config('db.icon');
        $social = config('db.social');
        return view('index', compact('comics', 'icon', 'social'));

    }

    // COMICS

    // BONUS 1

    // public function detailComics($id){
    //     $comics = Comic::find($id);
    //     $single = [
    //         'single' => $comics
    //     ];
    //     $icon = config('db.icon');
    //     $social = config('db.social');
    //     return view('detail_comics', compact('comics', 'single', 'icon', 'social'));
        
    // }

    // BONUS 2

    public function detailComics($slug){
        $comics = Comic::where('slug', $slug)->get();
        $comics = $comics[0];
        $single = [
            'single' => $comics
        ];
        $icon = config('db.icon');
        $social = config('db.social');
        return view('detail_comics', compact( 'comics', 'single', 'icon', 'social'));

    }

    // CHARACTERS

    public function characters(){
        return view('characters');

    }
}
