<?php

namespace App\headfirst\designpatterns\command\party;

class Hottub
{
    public bool $on;
    public int $temperature = 0;

    public function on(): void
    {
        $this->on = true;
    }

    public function off(): void
    {
        $this->on = false;
    }

    public function circulate(): void
    {
        if ($this->on) {
            echo "Hottub is bubbling!\n";
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
        if ($temperature > $this->temperature) {
            echo "Hottub is heating to a steaming $temperature degrees\n";
        } else {
            echo "Hottub is cooling to $temperature degrees\n";
        }
        $this->temperature = $temperature;
    }
}
