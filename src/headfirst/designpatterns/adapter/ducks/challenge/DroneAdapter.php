<?php

namespace App\headfirst\designpatterns\adapter\ducks\challenge;

use App\headfirst\designpatterns\adapter\ducks\Duck;

class DroneAdapter implements Duck
{
    public Drone $drone;

    public function __construct(Drone $drone)
    {
        $this->drone = $drone;
    }

    public function quack(): void
    {
        $this->drone->beep();
    }

    public function fly(): void
    {
        $this->drone->spin_rotors();
        $this->drone->take_off();
    }
}
