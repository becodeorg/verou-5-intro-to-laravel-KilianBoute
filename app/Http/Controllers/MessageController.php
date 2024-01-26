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

    public function destroy($id)
    {
        // $message = Message::find($id);
        // $message->delete();

        Message::destroy($id);

        return redirect()->route('messages')
            ->with('success', 'Post deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|max:255',
            'user_name' => 'required',
        ]);

        Message::findOrFail($id)->update($request->all());

        return redirect()->route('messages')
            ->with('success', 'Post edited successfully');
    }

    public function edit($id)
    {
        return view('messages.edit', ['message' => Message::findOrFail($id)]);
    }
}
