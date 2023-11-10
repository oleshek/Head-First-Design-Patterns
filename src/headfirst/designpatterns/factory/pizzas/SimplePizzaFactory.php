<?php

namespace App\headfirst\designpatterns\factory\pizzas;

use App\headfirst\designpatterns\factory\pizzas\pizzaTypes\CheesePizza;
use App\headfirst\designpatterns\factory\pizzas\pizzaTypes\ClamPizza;
use App\headfirst\designpatterns\factory\pizzas\pizzaTypes\PepperoniPizza;
use App\headfirst\designpatterns\factory\pizzas\pizzaTypes\Pizza;
use App\headfirst\designpatterns\factory\pizzas\pizzaTypes\VeggiePizza;

class SimplePizzaFactory
{
    public function createPizza(string $type): Pizza
    {
		if ($type == 'cheese') {
			$pizza = new CheesePizza();
		} elseif ($type == 'pepperoni') {
            $pizza = new PepperoniPizza();
        } elseif ($type == 'clam') {
            $pizza = new ClamPizza();
        } elseif ($type == 'veggie') {
            $pizza = new VeggiePizza();
        }

        return $pizza;
    }
}
