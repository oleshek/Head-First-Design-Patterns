<?php

namespace App\headfirst\designpatterns\factory\pizzaaf;

use App\headfirst\designpatterns\factory\pizzaaf\ingredients\BlackOlives;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Cheese;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Clams;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Dough;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Eggplant;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\FreshClams;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\MarinaraSauce;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Pepperoni;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\ReggianoCheese;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Sauce;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\SlicedPepperoni;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Spinach;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\ThinCrustDough;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new BlackOlives(),
            new Spinach(),
            new Eggplant(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FreshClams();
    }
}
