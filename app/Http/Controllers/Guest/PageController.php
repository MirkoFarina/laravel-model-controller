<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Index (){
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function About (){
        return view('about');
    }

    public function Description($id){
        $movie = Movie::find($id);
        return view('descriptionMovie', compact('movie'));
    }
}
