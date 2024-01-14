<?php

namespace App\headfirst\designpatterns\command\simpleremote;

class Light
{
    public function on(): void
    {
        echo "Light is on\n";
    }

    public function off(): void
    {
        echo "Light is off\n";
    }
}
