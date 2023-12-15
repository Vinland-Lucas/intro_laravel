@extends('layout.app')

@section('title', 'Ajouter un film')

@section('content')


    <div class="h-screen">
        <form action="" method="post">
            @csrf
            <div>
                <label for="name">Nom du film</label>
                <input type="text" id="name" name="name" value="">
            </div>

            <div>
                <label for="cover">Cover du film</label>
                <input type="url" id="cover" name="cover">
            </div>

            <div>
                <label for="synopsis">Synopsis</label>
                <textarea id="synopsis" name="synopsis"></textarea>
            </div>

            <div>
                <label for="category">Catégorie</label>
                <input type="text" id="category" name="category">
            </div>

            <div>
                <label for="producer">Réalisateur</label>
                <input type="text" id="producer" name="producer">
            </div>

            <div>
                <label for="release_date">Date de sortie</label>
                <input type="date" id="release_date" name="release_date">
            </div>

            <div>
                <button>Ajouter</button>
            </div>

        </form>
    </div>

@endsection
