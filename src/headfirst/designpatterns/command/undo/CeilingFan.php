<?php

namespace App\headfirst\designpatterns\command\undo;

class CeilingFan
{
    public final const OFF = 0;
    public final const LOW = 1;
    public final const MEDIUM = 2;
    public final const HIGH = 3;

    public int $speed;
    public string $location = '';

    public function __construct(string $location)
    {
        $this->location = $location;
        $this->speed = self::OFF;
    }

    public function high(): void
    {
        $this->speed = self::HIGH;
        echo "$this->location ceiling fan is on high\n";
    }

    public function medium(): void
    {
        $this->speed = self::MEDIUM;
        echo "$this->location ceiling fan is on medium\n";
    }

    public function low(): void
    {
        $this->speed = self::LOW;
        echo "$this->location ceiling fan is on low\n";
    }

    public function off(): void
    {
        $this->speed = self::OFF;
        echo "$this->location ceiling fan is off\n";
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}
