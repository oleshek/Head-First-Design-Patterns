<?php

namespace App\headfirst\designpatterns\factory\pizzafm\pizzaTypes;

abstract class Pizza
{
    public string $name;
    public string $dough;
    public string $sauce;
    public array $toppings = [];

    public function prepare(): void
    {
        echo "Prepare $this->name\n";
        echo "Tossing dough...\n";
        echo "Adding sauce...\n";
        echo "Adding toppings: \n";

        foreach ($this->toppings as $topping) {
            echo "   $topping\n";
        }
    }

    public function bake(): void
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function cut(): void
    {
        echo "Cut the pizza into diagonal slices\n";
    }

    public function box(): void
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        // code to display pizza name and ingredients
        $display = "---- $this->name ----\n";
        $display .= "$this->dough\n";
        $display .= "$this->sauce\n";

        foreach ($this->toppings as $topping) {
            $display .= "$topping\n";
        }

        return $display;
    }
}
