<?php

namespace App\headfirst\designpatterns\factory\pizzafm;

use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\ChicagoStyleCheesePizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\ChicagoStyleClamPizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\ChicagoStylePepperoniPizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\ChicagoStyleVeggiePizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\NYStyleCheesePizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\NYStyleClamPizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\NYStylePepperoniPizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\NYStyleVeggiePizza;
use App\headfirst\designpatterns\factory\pizzafm\pizzaTypes\Pizza;

class DependentPizzaStore
{
    public function orderPizza(string $style, string $type): ?Pizza
    {
        $pizza = null;

        if ($style == 'NY') {
            if ($type == 'cheese') {
                $pizza = new NYStyleCheesePizza();
            } elseif ($type == 'veggie') {
                $pizza = new NYStyleVeggiePizza();
            } elseif ($type == 'clam') {
                $pizza = new NYStyleClamPizza();
            } elseif ($type == 'pepperoni') {
                $pizza = new NYStylePepperoniPizza();
            }
        } elseif ($style == 'Chicago') {
            if ($type == 'cheese') {
                $pizza = new ChicagoStyleCheesePizza();
            } elseif ($type == 'veggie') {
                $pizza = new ChicagoStyleVeggiePizza();
            } elseif ($type == 'clam') {
                $pizza = new ChicagoStyleClamPizza();
            } elseif ($type == 'pepperoni') {
                $pizza = new ChicagoStylePepperoniPizza();
            }
        } else {
            echo "Error: invalid type of pizza\n";

            return null;
        }

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
