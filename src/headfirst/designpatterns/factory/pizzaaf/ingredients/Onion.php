<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class Onion implements Veggies
{
    public function __toString(): string
    {
        return 'Onion';
    }
}
