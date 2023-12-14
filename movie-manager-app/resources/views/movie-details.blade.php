@extends('layout.app')

@section('title', 'Movie Details')

@section('content')
    <h1>FICHE DU FILM {{ $id }} </h1>

    @foreach($movies as $movie)
        @if($movie->id == $id)
            <div>
                <h2 class="bold">{{ $movie->name }}</h2>
                <img src="{{ $movie->cover }}" alt="">
                <p><span class="bold">Synopsis :</span> {{ $movie->synopsis }}</p>
                {{--                @if( $movie->actors)--}}
                {{--                    <p><span class="bold">Actors :</span> {{ $movie->actors }}</p>--}}
                {{--                @endif--}}
                @if( $movie->producer )
                    <p><span class="bold">Director :</span> {{ $movie->producer }}</p>
                @endif
                {{--                @if( $movie->creator )--}}
                {{--                    <p><span class="bold">Creator :</span> {{ $movie->creator }}</p>--}}
                {{--                @endif--}}
                <p><span class="bold">Released on :</span> {{ $movie->release_date }}</p>
                {{--                <p><span class="bold">Rating :</span> {{ $movie->contentrating }}</p>--}}
                {{--                <p><span class="bold">Type :</span> {{ $movie->contenttype }}</p>--}}
                <p><span class="bold">Genre :</span> {{ $movie->category }}</p>
            </div>
        @endif

    @endforeach

@stop
