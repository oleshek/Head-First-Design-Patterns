<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class Garlic implements Veggies
{
    public function __toString(): string
    {
        return 'Garlic';
    }
}
