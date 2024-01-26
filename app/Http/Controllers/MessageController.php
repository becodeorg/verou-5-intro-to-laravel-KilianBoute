<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        return view("messages.index", ['messages' => Message::all()]);
    }

    public function showCreate()
    {
        return view("messages.index", ['messages' => Message::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:255',
            'user_name' => 'required',
        ]);

        Message::create($request->all());

        return redirect()->route('messages')
            ->with('success', 'Post created successfully.');
    }
}
