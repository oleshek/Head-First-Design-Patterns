<?php

namespace App\headfirst\designpatterns\factory\pizzaaf;

use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\CheesePizza;
use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\ClamPizza;
use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\PepperoniPizza;
use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\Pizza;
use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type == 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } elseif ($type == 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('Chicago Style Veggie Pizza');
        } elseif ($type == 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        } elseif ($type == 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('Chicago Style Pepperoni Pizza');
        }

        return $pizza;
    }
}