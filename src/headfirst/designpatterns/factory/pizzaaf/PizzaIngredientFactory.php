<?php

namespace App\headfirst\designpatterns\factory\pizzaaf;

use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Cheese;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Clams;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Dough;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Pepperoni;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Sauce;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;

    public function createClam(): Clams;
}
