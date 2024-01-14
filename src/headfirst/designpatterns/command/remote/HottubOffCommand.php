<?php

namespace App\headfirst\designpatterns\command\remote;

class HottubOffCommand implements Command
{
    public Hottub $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute(): void
    {
        $this->hottub->cool();
        $this->hottub->off();
    }
}
