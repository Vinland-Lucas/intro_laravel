<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Show movies list.
     */
    public function showAllMovies(): string
    {
        return 'Liste des produits';
    }

    /**
     * Show the movie by his id.
     */
    public function showMovieById(string $id): string
    {
        return 'Fiche du film '. $id;
    }
}
