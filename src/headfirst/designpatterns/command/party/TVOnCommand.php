<?php

namespace App\headfirst\designpatterns\command\party;

class TVOnCommand implements Command
{
    public TV $tv;

    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute(): void
    {
        $this->tv->on();
        $this->tv->setInputChannel();
    }

    public function undo(): void
    {
        $this->tv->off();
    }
}
