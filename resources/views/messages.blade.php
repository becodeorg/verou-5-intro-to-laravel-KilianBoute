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
   
    <div>
         <p>Messages</p>
        @foreach ($messages as $message)
            <p>{{$message->getContent()}}</p>
        @endforeach
    </div>

    <p>New message</p>
    <form method="POST" action= {{route("submitCreate")}} class="max-w-sm mx-auto">
        @csrf
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
        <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
        <button type="submit">Submit</button>
    </form>
      @if(!empty($success))
        <p>{{$success}}</p>
        @endif 
    <a href="/">back</a>
</body>

</html>