<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class MarinaraSauce implements Sauce
{
    public function __toString(): string
    {
        return 'Marinara Sauce';
    }
}
