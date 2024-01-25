<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="container">
    <p>Pokemon: </p>
    <ol>
        @foreach ($pokemons as $pokemon)
            <li><span>{{$pokemon->name}} {{$pokemon->type_1}} {{$pokemon->type_2}}<span></li>
        @endforeach
    </ol>
    <a href="/">back</a>
</body>

</html>