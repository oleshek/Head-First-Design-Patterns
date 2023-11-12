<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes;

use App\headfirst\designpatterns\factory\pizzaaf\PizzaIngredientFactory;

class CheesePizza extends Pizza
{
    public PizzaIngredientFactory $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo "Preparing $this->name\n";

        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}
