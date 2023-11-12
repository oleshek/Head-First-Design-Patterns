<?php

namespace App\headfirst\designpatterns\factory\pizzaaf;

use App\headfirst\designpatterns\factory\pizzaaf\ingredients\BlackOlives;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Cheese;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Clams;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Dough;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Eggplant;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\FrozenClams;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\MozzarellaCheese;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Pepperoni;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\PlumTomatoSauce;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Sauce;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\SlicedPepperoni;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Spinach;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\ThickCrustDough;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
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
        return new FrozenClams();
    }
}
