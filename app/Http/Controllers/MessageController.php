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

    public function submitCreate(Request $request)
    {
        $messageContent = $request->input('message');
        $success = 'Message submitted';
        if ($messageContent === "Hello world") {
            $this->messages[] = new Message(count($this->messages), $request->input('message'));
        } else {
            $success = 'Please submit \'Hello world\'';
        }
        return view("messages.index", ['messages' => $this->messages, 'success' => $success]);
    }
}
