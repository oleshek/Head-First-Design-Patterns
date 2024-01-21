<?php

namespace App\headfirst\designpatterns\adapter\ducks\challenge;

interface Drone
{
    public function beep(): void;

    public function spin_rotors(): void;

    public function take_off(): void;
}
