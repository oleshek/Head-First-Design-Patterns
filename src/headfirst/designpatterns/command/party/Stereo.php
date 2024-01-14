<?php

namespace App\headfirst\designpatterns\command\party;

class Stereo
{
    public string $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on(): void
    {
        echo "$this->location stereo is on\n";
    }

    public function off(): void
    {
        echo "$this->location stereo is off\n";
    }

    public function setCD(): void
    {
        echo "$this->location stereo is set for CD input\n";
    }

    public function setDVD(): void
    {
        echo "$this->location stereo is set for DVD input\n";
    }

    public function setRadio(): void
    {
        echo "$this->location stereo is set for Radio\n";
    }

    public function setVolume(int $volume): void
    {
        // code to set the volume
        // valid range: 1-11 (after all 11 is better than 10, right?)
        echo "$this->location Stereo volume set to $volume\n";
    }
}
