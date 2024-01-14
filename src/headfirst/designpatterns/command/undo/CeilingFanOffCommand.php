<?php

namespace App\headfirst\designpatterns\command\undo;

class CeilingFanOffCommand implements Command
{
    public CeilingFan $ceilingFan;
    public int $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->off();
    }

    public function undo(): void
    {
        if ($this->prevSpeed == CeilingFan::HIGH) {
            $this->ceilingFan->high();
        } elseif ($this->prevSpeed == CeilingFan::MEDIUM) {
            $this->ceilingFan->medium();
        } elseif ($this->prevSpeed == CeilingFan::LOW) {
            $this->ceilingFan->low();
        } elseif ($this->prevSpeed == CeilingFan::OFF) {
            $this->ceilingFan->off();
        }
    }
}
