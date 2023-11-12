<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class ThinCrustDough implements Dough
{
    public function __toString(): string
    {
        return 'Thin Crust Dough';
    }
}
