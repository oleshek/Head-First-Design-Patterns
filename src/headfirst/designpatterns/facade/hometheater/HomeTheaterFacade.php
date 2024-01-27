<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class HomeTheaterFacade
{
    public Amplifier $amp;
    public Tuner $tuner;
    public StreamingPlayer $player;
    public CdPlayer $cd;
    public Projector $projector;
    public TheaterLights $lights;
    public Screen $screen;
    public PopcornPopper $popper;

    public function __construct(
        Amplifier $amp,
        Tuner $tuner,
        StreamingPlayer $player,
        Projector $projector,
        Screen $screen,
        TheaterLights $lights,
        PopcornPopper $popper
    ) {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->player = $player;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->lights = $lights;
        $this->popper = $popper;
    }

    public function watchMovie(string $movie): void
    {
        echo "Get ready to watch a movie...\n";
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setStreamingPlayer($this->player);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->player->on();
        $this->player->play($movie);
    }

    public function endMovie(): void
    {
        echo "Shutting movie theater down...\n";
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->player->stop();
        $this->player->off();
    }

    public function listenToRadio(float $frequency): void
    {
        echo "Tuning in the airwaves...\n";
        $this->tuner->on();
        $this->tuner->setFrequency($frequency);
        $this->amp->on();
        $this->amp->setVolume(5);
        $this->amp->setTuner($this->tuner);
    }

    public function endRadio(): void
    {
        echo "Shutting down the tuner...\n";
        $this->tuner->off();
        $this->amp->off();
    }
}
