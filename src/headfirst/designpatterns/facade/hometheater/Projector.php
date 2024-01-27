<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class Projector
{
    public string $description;
    public StreamingPlayer $player;

    public function __construct(string $description, StreamingPlayer $player)
    {
        $this->description = $description;
        $this->player = $player;
    }

    public function on(): void
    {
        echo "$this->description on\n";
    }

    public function off(): void
    {
        echo "$this->description off\n";
    }

    public function wideScreenMode(): void
    {
        echo "$this->description in widescreen mode (16x9 aspect ratio)\n";
    }

    public function tvMode(): void
    {
        echo "$this->description in tv mode (4x3 aspect ratio)\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
