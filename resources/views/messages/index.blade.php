@extends('layout')

@section('title')
    messages - index
@endsection

@section('content')

<body class="container">
   
    <div>
         <p>Messages</p>
        @foreach ($messages as $message)
            <div><p>{{$message->content}}</p>
            <p>By: {{$message->user_name}} at {{$message->updated_at}}</p>
            @if($message->created_at != $message->updated_at)
            <span>*edited*</span>
            @endif
            </div>
            <form action="{{ route('messages.destroy', $message->id) }}" method="post">
            
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete this message?')">Delete</button>
</form>
<a href="{{route('messages.edit', $message->id)}}">Edit</a>
        @endforeach
    </div>

    <p>New message</p>
    <form method="POST" action= {{route("messages.store")}} class="max-w-sm mx-auto">
        @csrf
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
        <textarea name="content" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
        Name: <input type="text" name="user_name"><br>
        <button type="submit">Submit</button>
    </form>
      @if(!empty($success))
        <p>{{$success}}</p>
        @endif 

    <a href="/">back</a>
</body>

@endsection