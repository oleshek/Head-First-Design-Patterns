<?php

namespace App\headfirst\designpatterns\command\party;

class TV
{
    public int $channel;
    public string $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on(): void
    {
        echo "$this->location TV is on\n";
    }

    public function off(): void
    {
        echo "$this->location TV is off\n";
    }

    public function setInputChannel(): void
    {
        $this->channel = 3;
        echo "$this->location TV channel is set for DVD\n";
    }
}
