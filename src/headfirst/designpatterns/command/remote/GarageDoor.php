<?php

namespace App\headfirst\designpatterns\command\remote;

class GarageDoor
{
    public string $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function up(): void
    {
        echo "$this->location garage Door is Up\n";
    }

    public function down(): void
    {
        echo "$this->location garage Door is Down\n";
    }

    public function stop(): void
    {
        echo "$this->location garage Door is Stopped\n";
    }

    public function lightOn(): void
    {
        echo "$this->location garage light is on\n";
    }

    public function lightOff(): void
    {
        echo "$this->location garage light is off\n";
    }
}
