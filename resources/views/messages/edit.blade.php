@extends('layout')

@section('title')
    messages - edit
@endsection

@section('content')

    <body>


        <p>Edit message</p>
        <form method="POST" action={{ route('messages.update', $message->id) }} class="max-w-sm mx-auto">
            @csrf
            @method('PUT')
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
            <textarea name="content" id="message" rows="4">{{ $message->content }}</textarea>
            Name: <input type="text" name="user_name" value="{{ $message->user_name }}"><br>
            <button type="submit">Submit</button>
            <a href="{{ route('messages') }}">Back</a>
        </form>
    </body>
@endsection
