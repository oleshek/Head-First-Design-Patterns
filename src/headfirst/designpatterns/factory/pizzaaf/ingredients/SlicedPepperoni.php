<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class SlicedPepperoni implements Pepperoni
{
    public function __toString(): string
    {
        return 'Sliced Pepperoni';
    }
}
