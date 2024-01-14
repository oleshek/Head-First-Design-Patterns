<?php

namespace App\headfirst\designpatterns\command\party;

class StereoOnCommand implements Command
{
    public Stereo $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
    }

    public function undo(): void
    {
        $this->stereo->off();
    }
}
