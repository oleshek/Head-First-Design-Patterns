<?php

namespace App\headfirst\designpatterns\command\remote;

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
        $this->hottub->heat();
        $this->hottub->bubblesOn();
    }
}
