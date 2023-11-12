<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\ingredients;

class FreshClams implements Clams
{
    public function __toString(): string
    {
        return 'Fresh Clams from Long Island Sound';
    }
}
