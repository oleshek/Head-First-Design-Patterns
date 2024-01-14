<?php

namespace App\headfirst\designpatterns\command\remote;

class StereoOnWithCDCommand implements Command
{
    public Stereo $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }
}
