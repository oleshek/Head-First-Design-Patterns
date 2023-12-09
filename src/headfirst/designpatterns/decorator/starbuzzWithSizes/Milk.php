<?php

namespace App\headfirst\designpatterns\decorator\starbuzzWithSizes;

class Milk extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Milk';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .10;
    }
}
