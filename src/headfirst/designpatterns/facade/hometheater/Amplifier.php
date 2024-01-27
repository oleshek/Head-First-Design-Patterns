<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class Amplifier
{
    public string $description;
    public Tuner $tuner;
    public StreamingPlayer $player;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function on(): void
    {
        echo "$this->description on\n";
    }

    public function off(): void
    {
        echo "$this->description off\n";
    }

    public function setStereoSound(): void
    {
        echo "$this->description stereo mode on\n";
    }

    public function setSurroundSound(): void
    {
        echo "$this->description surround sound on (5 speakers, 1 subwoofer)\n";
    }

    public function setVolume(int $level): void
    {
        echo "$this->description setting volume to $level";
    }

    public function setTuner(Tuner $tuner): void
    {
        echo "$this->description setting tuner to $tuner";
        $this->tuner = $tuner;
    }

    public function setStreamingPlayer(StreamingPlayer $player): void
    {
        echo "$this->description setting Streaming player to $player";
        $this->player = $player;
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
