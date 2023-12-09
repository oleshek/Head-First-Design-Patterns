<?php

namespace App\headfirst\designpatterns\decorator\starbuzzWithSizes;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }

    public function cost(): float
    {
        return .99;
    }
}
