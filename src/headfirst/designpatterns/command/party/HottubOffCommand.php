<?php

namespace App\headfirst\designpatterns\command\party;

class HottubOffCommand implements Command
{
    public Hottub $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute(): void
    {
        $this->hottub->setTemperature(98);
        $this->hottub->off();
    }

    public function undo(): void
    {
        $this->hottub->on();
    }
}
