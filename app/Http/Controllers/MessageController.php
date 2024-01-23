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
        $this->messages = [new Message(1, 'Message 1'), new Message(2, 'Message 2')];
    }

    public function index()
    {
        return view("messages", ['messages' => $this->messages]);
    }

    public function showCreate()
    {
        return view("messages", ['messages' => $this->messages]);
    }

    public function submitCreate(Request $request)
    {
        $this->messages[] = new Message(count($this->messages), $request->input('message'));
        return view("messages", ['messages' => $this->messages, 'success' => 'Form submitted successfully']);
    }
}
