@extends('layout')

@section('title')
    pokemon - show
@endsection

@section('content')

    <body class="container">
        <h2>{{ $pokemon->name }}</h2>
        <p>
            {{ $pokemon->type_1 }} {{ $pokemon->type_2 }}
        </p>
        <img src="{{ $pokemon->image }}" alt='image of {{ $pokemon->name }}'>
        <a href="/pokemon">back</a>
    </body>
@endsection
