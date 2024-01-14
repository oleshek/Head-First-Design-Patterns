<?php

namespace App\headfirst\designpatterns\command\party;

class Light
{
    public string $location;
    public int $level;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on(): void
    {
        $this->level = 100;
        echo "Light is on\n";
    }

    public function off(): void
    {
        $this->level = 0;
        echo "Light is off\n";
    }

    public function dim(int $level): void
    {
        $this->level = $level;
        if ($level == 0) {
            off();
        } else {
            echo "Light is dimmed to $level%\n";
        }
    }

    public function getLevel(): int
    {
        return $this->level;
    }
}
