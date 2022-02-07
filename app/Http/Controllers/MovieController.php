<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dd($movie);

        // return view("home", ["movies" => $movies]);
        return view("home", compact("movies"));
    }
}
