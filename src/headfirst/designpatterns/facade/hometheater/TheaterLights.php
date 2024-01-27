<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class TheaterLights
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

    public function dim(int $level): void
    {
        echo "$this->description dimming to $level%\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
