<?php

namespace App\headfirst\designpatterns\decorator\pizza;

class PizzaStore
{
    public static function main(): void
    {
        $pizza = new ThincrustPizza();
        $cheesePizza = new Cheese($pizza);
        $greekPizza = new Olives($cheesePizza);

        echo $greekPizza->getDescription().' $'.$greekPizza->cost()."\n";
    }
}
