<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class PlumTomatoSauce implements Sauce
{
    public function __toString(): string
    {
        return 'Tomato sauce with plum tomatoes';
    }
}
