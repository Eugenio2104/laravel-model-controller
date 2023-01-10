<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view(view: 'home');
    }

    public function about()
    {
        return view('about');
    }

    public function movies()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function movieDetail($id)
    {
        $movie = Movie::find($id);
        return view('movie-detail', compact('movie'));
    }
}
