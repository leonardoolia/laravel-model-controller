<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function __invoke()
    {
        $movies = Movie::select('*')->get();
        return view('movies', compact('movies'));        
    }
    
}
