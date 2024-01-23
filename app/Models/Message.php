<?php

namespace App\Models;

class Message
{
    private $id;
    private $content;

    public function __construct(int $id, string $content)
    {
        $this->id = $id;
        $this->content = $content;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getContent()
    {
        return $this->content;
    }
}
