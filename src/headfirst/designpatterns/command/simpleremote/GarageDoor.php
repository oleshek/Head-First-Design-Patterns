<?php

namespace App\headfirst\designpatterns\command\simpleremote;

class GarageDoor
{
    public function up(): void
    {
        echo "Garage Door is Open\n";
    }

    public function down(): void
    {
        echo "Garage Door is Closed\n";
    }

    public function stop(): void
    {
        echo "Garage Door is Stopped\n";
    }

    public function lightOn(): void
    {
        echo "Garage light is on\n";
    }

    public function lightOff(): void
    {
        echo "Garage light is off\n";
    }
}
