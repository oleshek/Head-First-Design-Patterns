<?php

namespace App\headfirst\designpatterns\decorator\pizza;

class ThickcrustPizza extends Pizza
{
    public function __construct()
    {
        $this->description = 'Thick crust pizza, with tomato sauce';
    }

    public function cost(): float
    {
        return 7.99;
    }
}
