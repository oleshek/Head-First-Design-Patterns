<?php

namespace App\headfirst\designpatterns\factory\pizzaaf;

use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\CheesePizza;
use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\ClamPizza;
use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\PepperoniPizza;
use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\Pizza;
use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $item): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($item == 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } elseif ($item == 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('Chicago Style Veggie Pizza');
        } elseif ($item == 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        } elseif ($item == 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('Chicago Style Pepperoni Pizza');
        }

        return $pizza;
    }
}
