@extends('layout')

@section('content')
    <body class="container">
       <p>{{ $greeting }} world</p>
       <div>
        <a href="messages">Messages</a>
        <a href={{route("pokemon")}} >Pokemon</a>
       </div>
       

    </body>
    @endsection
