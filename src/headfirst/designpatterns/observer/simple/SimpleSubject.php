<?php

namespace App\headfirst\designpatterns\observer\simple;

class SimpleSubject implements Subject
{
    private array $observers;
    private int $value = 0;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $o): void
    {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o): void
    {
        array_pop($this->observers);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->value);
        }
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
        $this->notifyObservers();
    }
}