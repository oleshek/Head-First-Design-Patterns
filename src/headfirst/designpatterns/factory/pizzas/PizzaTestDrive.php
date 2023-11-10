<?php

namespace App\headfirst\designpatterns\factory\pizzas;

class PizzaTestDrive
{
	public static function main(): void
    {
		$factory = new SimplePizzaFactory();
		$store = new PizzaStore($factory);

		$pizza = $store->orderPizza('cheese');
        echo 'We ordered a ' . $pizza->getName() . "\n";
        echo "$pizza\n";

        $pizza = $store->orderPizza('veggie');
        echo 'We ordered a ' . $pizza->getName() . "\n";
        echo $pizza;
	}
}
