<?php

namespace App\headfirst\designpatterns\command\remote;

class TV
{
    public int $channel;
    public string $location = '';

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on(): void
    {
        echo "TV is on\n";
    }

    public function off(): void
    {
        echo "TV is off\n";
    }

    public function setInputChannel(): void
    {
        $this->channel = 3;
        echo "Channel is set for VCR\n";
    }
}
