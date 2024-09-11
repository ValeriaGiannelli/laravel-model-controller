<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Movie;

class PageController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function movies(){
        return view('movie');
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
