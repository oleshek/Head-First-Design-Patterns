<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class Tuner
{
    public string $description;
    public Amplifier $amplifier;
    public float $frequency;

    public function __construct(string $description, Amplifier $amplifier)
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

    public function setFrequency(float $frequency): void
    {
        echo "$this->description setting frequency to $frequency";
        $this->frequency = $frequency;
    }

    public function setAm(): void
    {
        echo "$this->description setting AM mode\n";
    }

    public function setFm(): void
    {
        echo "$this->description setting FM mode\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
