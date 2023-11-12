<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class ParmesanCheese implements Cheese
{
    public function __toString(): string
    {
        return 'Shredded Parmesan';
    }
}
