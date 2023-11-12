<?php

namespace App\headfirst\designpatterns\factory\pizzaaf;

class PizzaTestDrive
{
    public static function main(): void
    {
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        echo "Ethan ordered a $pizza\n";

        $pizza = $chicagoStore->orderPizza('cheese');
        echo "Joel ordered a $pizza\n";

        $pizza = $nyStore->orderPizza('clam');
        echo "Ethan ordered a $pizza\n";

        $pizza = $chicagoStore->orderPizza('clam');
        echo "Joel ordered a $pizza\n";

        $pizza = $nyStore->orderPizza('pepperoni');
        echo "Ethan ordered a $pizza\n";

        $pizza = $chicagoStore->orderPizza('pepperoni');
        echo "Joel ordered a $pizza\n";

        $pizza = $nyStore->orderPizza('veggie');
        echo "Ethan ordered a $pizza\n";

        $pizza = $chicagoStore->orderPizza('veggie');
        echo "Joel ordered a $pizza\n";
    }
}
