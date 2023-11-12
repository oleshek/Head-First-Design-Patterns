<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class ThickCrustDough implements Dough
{
    public function __toString(): string
    {
        return 'ThickCrust style extra thick crust dough';
    }
}
