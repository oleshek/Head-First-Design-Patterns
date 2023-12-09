<?php

namespace App\headfirst\designpatterns\decorator\starbuzz;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = 'Decaf Coffee';
    }

    public function cost(): float
    {
        return 1.05;
    }
}
