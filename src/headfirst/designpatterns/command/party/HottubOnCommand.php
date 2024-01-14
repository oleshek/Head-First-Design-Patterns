<?php

namespace App\headfirst\designpatterns\command\party;

class HottubOnCommand implements Command
{
    public Hottub $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute(): void
    {
        $this->hottub->on();
        $this->hottub->setTemperature(104);
        $this->hottub->circulate();
    }

    public function undo(): void
    {
        $this->hottub->off();
    }
}
