<?php

namespace App\headfirst\designpatterns\decorator\starbuzzWithSizes;

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
        $cost = $this->beverage->cost();
        if ($this->beverage->getSize() == Size::TALL) {
            $cost += .10;
        } elseif ($this->beverage->getSize() == Size::GRANDE) {
            $cost += .15;
        } elseif ($this->beverage->getSize() == Size::VENTI) {
            $cost += .20;
        }

        return $cost;
    }
}
