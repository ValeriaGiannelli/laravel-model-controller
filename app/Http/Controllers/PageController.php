<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    //
    public function index(){

        $movies= Movie::all();
        return view('movies', compact('movies'));
    }

    // creo una seconda funzione per visualizzare solo i film sopra l'8
    public function bestMovie(){

        $movies= Movie::where('vote', '>=', 8.5)->get();
        return view('movies', compact('movies'));
    }

    public function movieDetail($id){

        $movie= Movie::find($id);
        return view('movieDetails', compact('movie'));
    }


    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
