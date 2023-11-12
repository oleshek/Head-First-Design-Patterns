<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class Eggplant implements Veggies
{
    public function __toString(): string
    {
        return 'Eggplant';
    }
}
