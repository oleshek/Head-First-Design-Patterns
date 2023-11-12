<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class Mushroom implements Veggies
{
    public function __toString(): string
    {
        return 'Mushrooms';
    }
}
