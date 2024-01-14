<?php

namespace App\headfirst\designpatterns\command\remote;

class StereoOffCommand implements Command
{
    public Stereo $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->off();
    }
}
