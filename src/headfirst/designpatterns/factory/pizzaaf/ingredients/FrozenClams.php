<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class FrozenClams implements Clams
{
    public function __toString(): string
    {
        return 'Frozen Clams from Chesapeake Bay';
    }
}
