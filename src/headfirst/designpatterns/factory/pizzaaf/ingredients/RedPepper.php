<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class RedPepper implements Veggies
{
    public function __toString(): string
    {
        return 'Red Pepper';
    }
}
