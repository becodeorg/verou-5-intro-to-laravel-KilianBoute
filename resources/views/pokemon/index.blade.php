@extends('layout')

@section('title')
    pokemon - index
@endsection

@section('content')

    <body class="container">
        <p>Pokemon: </p>
        <ol>
            @foreach ($pokemons as $pokemon)
                <li><a href={{ route('showPokemon', ['pokemon' => $pokemon->id]) }}>{{ $pokemon->name }} </a></li>
            @endforeach
        </ol>
    </body>
@endsection
