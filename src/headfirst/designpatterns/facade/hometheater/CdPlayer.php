<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class CdPlayer
{
    public string $description;
    public int $currentTrack;
    public Amplifier $amplifier;
    public string $title;

    public function __construct(string $description, Amplifier $amplifier)
    {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    public function on(): void
    {
        echo "$this->description on\n";
    }

    public function off(): void
    {
        echo "$this->description off\n";
    }

    public function eject(): void
    {
        $this->title = null;
        echo "$this->description eject\n";
    }

    public function play(int|string $t): void
    {
        $parameterType = gettype($t);
        if ($parameterType === 'integer') {
            $this->playTrack($t);
        } elseif ($parameterType === 'string') {
            $this->playTitle($t);
        }
    }

    public function playTitle(string $title): void
    {
        $this->title = $title;
        $this->currentTrack = 0;
        echo "$this->description playing \"$this->title\"\n";
    }

    public function playTrack(int $track): void
    {
        if ($this->title == null) {
            echo "$this->description can't play track $this->currentTrack, no cd inserted\n";
        } else {
            $this->currentTrack = $track;
            echo "$this->description playing track $this->currentTrack";
        }
    }

    public function stop(): void
    {
        $this->currentTrack = 0;
        echo "$this->description stopped\n";
    }

    public function pause(): void
    {
        echo "$this->description paused \"$this->title\"\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
