<?php

namespace App\headfirst\designpatterns\command\remote;

class Hottub
{
    public bool $on;
    public int $temperature;

    public function on(): void
    {
        $this->on = true;
    }

    public function off(): void
    {
        $this->on = false;
    }

    public function bubblesOn(): void
    {
        if ($this->on) {
            echo "Hottub is bubbling!\n";
        }
    }

    public function bubblesOff(): void
    {
        if ($this->on) {
            echo "Hottub is not bubbling\n";
        }
    }

    public function jetsOn(): void
    {
        if ($this->on) {
            echo "Hottub jets are on\n";
        }
    }

    public function jetsOff(): void
    {
        if ($this->on) {
            echo "Hottub jets are off\n";
        }
    }

    public function setTemperature(int $temperature): void
    {
        $this->temperature = $temperature;
    }

    public function heat(): void
    {
        $this->temperature = 105;
        echo "Hottub is heating to a steaming 105 degrees\n";
    }

    public function cool(): void
    {
        $this->temperature = 98;
        echo "Hottub is cooling to 98 degrees\n";
    }
}
