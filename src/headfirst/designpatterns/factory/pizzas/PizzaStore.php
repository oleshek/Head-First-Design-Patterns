<?php

namespace App\headfirst\designpatterns\factory\pizzas;

use App\headfirst\designpatterns\factory\pizzas\pizzaTypes\Pizza;

class PizzaStore
{
	public SimplePizzaFactory $factory;
 
	public function __construct(SimplePizzaFactory $factory) { 
		$this->factory = $factory;
	}
 
	public function orderPizza(string $type): Pizza
    {
		$pizza = $this->factory->createPizza($type);
 
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();

		return $pizza;
	}
}
