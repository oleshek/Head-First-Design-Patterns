<?php

namespace App\headfirst\designpatterns\decorator\starbuzz;

abstract class Beverage
{
    public string $description = 'Unknown Beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}
