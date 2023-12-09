<?php

namespace App\headfirst\designpatterns\decorator\starbuzz;

class Soy extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Soy';
    }

    public function cost(): float
    {
        return .15 + $this->beverage->cost();
    }
}
