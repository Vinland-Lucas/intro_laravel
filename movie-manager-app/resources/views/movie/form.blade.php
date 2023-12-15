@extends('layout.app')

@section('title', $movie->exists ? "Modifier un film" : "Ajouter un film")

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($movie->exists ? 'movie.update' : 'movie.store', ['movie' => '$movie']) }}" method="post">
{{--        <form action="" method="post">--}}

        @csrf
        @method($movie->exists ? 'put' : 'post')
        <input type="text">
        <div>
            <button class="btn btn-secondary">
                @if($movie->exists)
                    Modifier
                @else
                    Ajouter
                @endif
            </button>
        </div>
    </form>

@endsection
