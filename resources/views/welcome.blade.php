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
       <p>{{ $greeting }} World</p>
       <div>
        <a href="messages">Messages</a>
        <a href="page-2">Page 2</a>
       </div>
       

    </body>
</html>