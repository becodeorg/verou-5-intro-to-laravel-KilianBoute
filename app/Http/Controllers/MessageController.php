<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    private $messages;

    public function __construct()
    {
        $this->messages = [new Message(1, 'Hello world'), new Message(2, 'Hello world')];
    }

    public function index()
    {
        return view("messages.index", ['messages' => $this->messages]);
    }

    public function showCreate()
    {
        return view("messages.index", ['messages' => $this->messages]);
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
