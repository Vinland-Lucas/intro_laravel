<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Show movies list.
     */
    public function showAllMovies(): view
    {

        $movies = Movie::all();
        // $movies =json_decode($moviesJson);
//        foreach (Movie::all() as $movies) {
//            echo $movies->name;
//            echo $movies->cover;
//            echo $movies->category;
//            echo $movies->producer;
//            echo $movies->release_at;
//        }

        return \view('movies-list', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the movie by his id.
     */
    public function showMovieById(string $id): View
    {
        $movies = Movie::all();

        return \view('movie-details', [
            'id' => $id,
            'movies' => $movies
        ]);
    }
}
