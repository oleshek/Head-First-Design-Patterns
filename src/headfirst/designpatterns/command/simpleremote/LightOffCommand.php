<?php

namespace App\headfirst\designpatterns\command\simpleremote;

class LightOffCommand implements Command
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
}
