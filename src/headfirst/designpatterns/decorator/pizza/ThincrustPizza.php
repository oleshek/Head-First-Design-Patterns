<?php

namespace App\headfirst\designpatterns\decorator\pizza;

class ThincrustPizza extends Pizza
{
    public function __construct()
    {
        $this->description = 'Thin crust pizza, with tomato sauce';
    }

    public function cost(): float
    {
        return 7.99;
    }
}
