<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    /**
     * Show movies list.
     */
    public function showAllMovies(): View
    {
        return view('movies-list');
    }

    /**
     * Show the movie by his id.
     */
    public function showMovieById(string $id): View
    {
        return view('movie-details', [
            'id' => $id
        ]);
    }
}
