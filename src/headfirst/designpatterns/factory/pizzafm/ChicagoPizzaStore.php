<?php

namespace App\headfirst\designpatterns\factory\pizzafm;

use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\ChicagoStyleCheesePizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\ChicagoStyleClamPizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\ChicagoStylePepperoniPizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\ChicagoStyleVeggiePizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
	public function createPizza(string $type): ?Pizza
    {
        if ($type == 'cheese') {
            return new ChicagoStyleCheesePizza();
        } elseif ($type == 'pepperoni') {
            return new ChicagoStylePepperoniPizza();
        } elseif ($type == 'clam') {
            return new ChicagoStyleClamPizza();
        } elseif ($type == 'veggie') {
            return new ChicagoStyleVeggiePizza();
        }

        return null;
	}
}
