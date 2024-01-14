<?php

namespace App\headfirst\designpatterns\command\remote;

class CeilingFan
{
    public final const LOW = 1;
    public final const MEDIUM = 2;
    public final const HIGH = 3;

    public int $level;
    public string $location = '';

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function high(): void
    {
        // turns the ceiling fan on to high
        $this->level = self::HIGH;
        echo "$this->location ceiling fan is on high\n";
    }

    public function medium(): void
    {
        // turns the ceiling fan on to medium
        $this->level = self::MEDIUM;
        echo "$this->location ceiling fan is on medium\n";
    }

    public function low(): void
    {
        // turns the ceiling fan on to low
        $this->level = self::LOW;
        echo "$this->location ceiling fan is on low\n";
    }

    public function off(): void
    {
        // turns the ceiling fan off
        $this->level = 0;
        echo "$this->location ceiling fan is off\n";
    }

    public function getSpeed(): int
    {
        return $this->level;
    }
}
