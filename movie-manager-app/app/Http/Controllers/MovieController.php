<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieFormRequest;
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

        return \view('movie.movies-list', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the movie by his id.
     */
    public function showMovieById(string $id): View
    {
        $movies = Movie::all();

        return \view('movie.movie-details', [
            'id' => $id,
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating the specified resource.
     */
    public function create() {
        return \view('movie.add-movie-form');
    }

    /**
     * Store a new movie with what has been passed in the creating form.
     */
    public function store(Request $request) {

        $movie = Movie::create([
            'name' => $request->input('name'),
            'cover' => $request->input('cover'),
            'synopsis' => $request->input('synopsis'),
            'category' => $request->input('category'),
            'producer' => $request->input('producer'),
            'release_date' => $request->input('release_date')
        ]);
        return redirect()->route('movie.movie-details', ['name' => $movie->name, 'movie' => $movie->id])->with('success', 'Le film a bien été ajouté');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return \view('movie.form', [
           'movie' => $movie
        ]);
    }

    public function update(MovieFormRequest $request, Movie $movie)
    {
        $movie->update($request->validated());
        return to_route('movie.movies-list')->with('success', 'Les informations du film ont bien été modifié');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return to_route('movie.movies-list')->with('success', 'Le film a bien été supprimé');
    }

}
