<?php

namespace App\headfirst\designpatterns\command\undo;

class Light
{
    public int $level;
    public string $location;

    public function __construct(string $location)
    {
        $this->location = $location;
        $this->level = 0;
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
        if ($this->level == 0) {
            $this->off();
        } else {
            echo "Light is dimmed to $this->level%\n";
        }
    }

    public function getLevel(): int
    {
        return $this->level;
    }
}
