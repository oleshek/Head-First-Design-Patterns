<?php

namespace App\headfirst\designpatterns\facade\hometheater;

class StreamingPlayer
{
    public string $description;
    public int $currentChapter;
    public Amplifier $amplifier;
    public string $movie;

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

    public function play(int|string $movieOrChapter): void
    {
        $parameterType = gettype($movieOrChapter);
        if ($parameterType === 'integer') {
            $this->playChapter($movieOrChapter);
        } elseif ($parameterType === 'string') {
            $this->playMovie($movieOrChapter);
        }
    }

    public function playMovie(string $movie): void
    {
        $this->movie = $movie;
        $this->currentChapter = 0;
        echo "$this->description playing \"$movie\"\n";
    }

    public function playChapter(int $chapter): void
    {
        if ($this->movie == null) {
            echo "$this->description can't play chapter $chapter no movie selected\n";
        } else {
            $this->currentChapter = $chapter;
            echo "$this->description playing chapter $this->currentChapter of \"$this->movie\"\n";
        }
    }

    public function stop(): void
    {
        $this->currentChapter = 0;
        echo "$this->description stopped \"$this->movie\"\n";
    }

    public function pause(): void
    {
        echo "$this->description paused \"$this->movie\"\n";
    }

    public function setTwoChannelAudio(): void
    {
        echo "$this->description set two channel audio\n";
    }

    public function setSurroundAudio(): void
    {
        echo "$this->description set surround audio\n";
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
