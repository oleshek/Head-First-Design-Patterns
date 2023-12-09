<?php

namespace App\headfirst\designpatterns\decorator\starbuzzWithSizes;

abstract class CondimentDecorator extends Beverage
{
    public Beverage $beverage;

    public function getSize(): Size
    {
        return $this->beverage->getSize();
    }
}
