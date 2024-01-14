<?php

namespace App\headfirst\designpatterns\command\remote;

class Light
{
    public string $location = '';

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on(): void
    {
        echo "$this->location light is on\n";
    }

    public function off(): void
    {
        echo "$this->location light is off\n";
    }
}
