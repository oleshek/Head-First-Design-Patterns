<?php

namespace App\headfirst\designpatterns\command\remote;

class LightOnCommand implements Command
{
    public Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }
}
