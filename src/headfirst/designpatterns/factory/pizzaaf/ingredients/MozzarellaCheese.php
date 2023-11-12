<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class MozzarellaCheese implements Cheese
{
    public function __toString(): string
    {
        return 'Shredded Mozzarella';
    }
}
