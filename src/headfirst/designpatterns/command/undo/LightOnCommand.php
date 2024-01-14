<?php

namespace App\headfirst\designpatterns\command\undo;

class LightOnCommand implements Command
{
    public int $level;
    public Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->level = $this->light->getLevel();
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->dim($this->level);
    }
}
