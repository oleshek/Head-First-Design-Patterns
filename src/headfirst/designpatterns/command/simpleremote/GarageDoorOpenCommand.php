<?php

namespace App\headfirst\designpatterns\command\simpleremote;

class GarageDoorOpenCommand implements Command
{
    public GarageDoor $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->up();
    }
}
