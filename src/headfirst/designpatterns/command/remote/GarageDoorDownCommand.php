<?php

namespace App\headfirst\designpatterns\command\remote;

class GarageDoorDownCommand implements Command
{
    public GarageDoor $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->down();
    }
}
