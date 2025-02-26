<?php

namespace App\headfirst\designpatterns\factory\pizzas\pizzaTypes;

class ClamPizza extends Pizza {
    public function __construct()
    {
        $this->name = 'Clam Pizza';
        $this->dough = 'Thin crust';
        $this->sauce = 'White garlic sauce';
        $this->toppings[] = 'Clams';
        $this->toppings[] = 'Grated parmesan cheese';
    }
}
