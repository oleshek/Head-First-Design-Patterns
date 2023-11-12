<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class BlackOlives implements Veggies
{
    public function __toString(): string
    {
        return 'Black Olives';
    }
}
