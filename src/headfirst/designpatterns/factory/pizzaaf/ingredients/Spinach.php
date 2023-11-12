<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class Spinach implements Veggies
{
    public function __toString(): string
    {
        return 'Spinach';
    }
}
