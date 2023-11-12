<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class ReggianoCheese implements Cheese
{
    public function __toString(): string
    {
        return 'Reggiano Cheese';
    }
}
