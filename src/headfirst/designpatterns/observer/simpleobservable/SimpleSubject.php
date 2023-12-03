<?php

namespace App\headfirst\designpatterns\observer\simpleobservable;

class SimpleSubject implements \SplSubject
{
    private string $name;
    private array $observers = [];
    private $value;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers, true);

        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setValue($value)
    {
        $this->value = $value;
        $this->notify();
    }

    public function getValue()
    {
        return $this->value." ($this->name)";
    }
}
