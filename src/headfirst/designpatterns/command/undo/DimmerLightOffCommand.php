<?php

namespace App\headfirst\designpatterns\command\undo;

class DimmerLightOffCommand implements Command
{
    public Light $light;
    public int $prevLevel;

    public function __construct(Light $light)
    {
        $this->light = $light;
        $this->prevLevel = 100;
    }

    public function execute(): void
    {
        $this->prevLevel = $this->light->getLevel();
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->dim($this->prevLevel);
    }
}
