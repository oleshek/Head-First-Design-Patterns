<?php

namespace App\headfirst\designpatterns\factory\pizzas\pizzaTypes;

abstract class Pizza
{
    public string $name;
    public string $dough;
    public string $sauce;
    public array $toppings = [];

    public function getName(): string
    {
        return $this->name;
    }

    public function prepare(): void
    {
        echo "Preparing $this->name\n";
    }

    public function bake(): void
    {
        echo "Baking $this->name\n";
    }

    public function cut(): void
    {
        echo "Cutting $this->name\n";
    }

    public function box(): void
    {
        echo "Boxing $this->name\n";
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
