<?php

namespace App\headfirst\designpatterns\decorator\pizza;

class Cheese extends ToppingDecorator
{
    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDescription(): string
    {
        return $this->pizza->getDescription().', Cheese';
    }

    public function cost(): float
    {
        return $this->pizza->cost(); // cheese is free
    }
}
