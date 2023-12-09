<?php

namespace App\headfirst\designpatterns\decorator\pizza;

class Olives extends ToppingDecorator
{
    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDescription(): string
    {
        return $this->pizza->getDescription().', Olives';
    }

    public function cost(): float
    {
        return $this->pizza->cost() + .30;
    }
}
