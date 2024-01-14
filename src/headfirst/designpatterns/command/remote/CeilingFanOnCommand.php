<?php

namespace App\headfirst\designpatterns\command\remote;

class CeilingFanOnCommand implements Command
{
    public CeilingFan $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->ceilingFan->high();
    }
}
