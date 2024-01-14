<?php

namespace App\headfirst\designpatterns\command\undo;

class DimmerLightOnCommand implements Command {
    public Light $light;
    public int $prevLevel;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

	public function execute():void {
        $this->prevLevel = $this->light->getLevel();
        $this->light->dim(75);
	}

	public function undo():void {
        $this->light->dim($this->prevLevel);
	}
}
