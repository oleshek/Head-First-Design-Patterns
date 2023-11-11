<?php

namespace App\headfirst\designpatterns\factory\pizzafm;

use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\NYStyleCheesePizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\NYStyleClamPizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\NYStylePepperoniPizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\NYStyleVeggiePizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\Pizza;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): ?Pizza
    {
        if ($type == 'cheese') {
            return new NYStyleCheesePizza();
        } elseif ($type == 'pepperoni') {
            return new NYStylePepperoniPizza();
        } elseif ($type == 'clam') {
            return new NYStyleClamPizza();
        } elseif ($type == 'veggie') {
            return new NYStyleVeggiePizza();
        }

        return null;
    }
}
