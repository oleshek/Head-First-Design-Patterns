<?php

namespace App\headfirst\designpatterns\factory\pizzafm\pizzaTypes;

class NYStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Veggie Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
        $this->toppings[] = 'Garlic';
        $this->toppings[] = 'Onion';
        $this->toppings[] = 'Mushrooms';
        $this->toppings[] = 'Red Pepper';
    }
}
