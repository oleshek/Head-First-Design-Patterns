<?php

namespace App\headfirst\designpatterns\command\party;

class CeilingFanHighCommand implements Command
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
        $this->ceilingFan->high();
    }

    public function undo(): void
    {
        switch ($this->prevSpeed) {
            case CeilingFan::HIGH:
                $this->ceilingFan->high();
                break;
            case CeilingFan::MEDIUM:
                $this->ceilingFan->medium();
                break;
            case CeilingFan::LOW:
                $this->ceilingFan->low();
                break;
            default:
                $this->ceilingFan->off();
                break;
        }
    }
}
