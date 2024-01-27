<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class PopcornPopper
{
    public string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function on(): void
    {
        echo "$this->description on\n";
    }

    public function off(): void
    {
        echo "$this->description off\n";
    }

    public function pop(): void
    {
        echo "$this->description popping popcorn!\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
