<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class HomeTheaterTestDrive
{
    public static function main(): void
    {
        $amp = new Amplifier('Amplifier');
        $tuner = new Tuner('AM/FM Tuner', $amp);
        $player = new StreamingPlayer('Streaming Player', $amp);
        $cd = new CdPlayer('CD Player', $amp);
        $projector = new Projector('Projector', $player);
        $lights = new TheaterLights('Theater Ceiling Lights');
        $screen = new Screen('Theater Screen');
        $popper = new PopcornPopper('Popcorn Popper');

        $homeTheater = new HomeTheaterFacade($amp, $tuner, $player, $projector, $screen, $lights, $popper);

        $homeTheater->watchMovie('Raiders of the Lost Ark');
        echo "\n";
        $homeTheater->endMovie();
    }
}
