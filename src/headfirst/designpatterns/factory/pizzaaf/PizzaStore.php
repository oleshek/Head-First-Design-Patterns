<?php

namespace App\headfirst\designpatterns\factory\pizzaaf;

use App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes\Pizza;

abstract class PizzaStore
{
    protected abstract function createPizza(string $type): ?Pizza;

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        echo '--- Making a '.$pizza->getName()." ---\n";

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
