<?php

namespace App\headfirst\designpatterns\adapter\ducks\challenge;

class SuperDrone implements Drone
{
    public function beep(): void
    {
        echo "Beep beep beep\n";
    }

    public function spin_rotors(): void
    {
        echo "Rotors are spinning\n";
    }

    public function take_off(): void
    {
        echo "Taking off\n";
    }
}
