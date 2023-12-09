<?php

namespace App\headfirst\designpatterns\decorator\starbuzz;

class Mocha extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Mocha';
    }

    public function cost(): float
    {
        return .20 + $this->beverage->cost();
    }
}
