<?php

namespace App\headfirst\designpatterns\command\party;

class LivingroomLightOffCommand implements Command
{
    public Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->on();
    }
}