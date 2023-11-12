<?php

namespace App\headfirst\designpatterns\factory\pizzaaf\pizzaTypes;

use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Cheese;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Clams;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Dough;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Pepperoni;
use App\headfirst\designpatterns\factory\pizzaaf\ingredients\Sauce;

abstract class Pizza
{
    public string $name;

    public Dough $dough;
    public Sauce $sauce;
    public array $veggies = [];
    public ?Cheese $cheese = null;
    public ?Pepperoni $pepperoni = null;
    public ?Clams $clam = null;

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function cut(): void
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box(): void
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        $result = "---- $this->name ----\n";
        if ($this->dough != null) {
            $result .= "$this->dough\n";
        }
        if ($this->sauce != null) {
            $result .= "$this->sauce\n";
        }
        if ($this->cheese != null) {
            $result .= "$this->cheese\n";
        }
        if ($this->veggies != null) {
            foreach ($this->veggies as $veggy) {
                $result .= "$veggy, ";
            }
            $result = substr($result, 0, -2);
            $result .= "\n";
        }
        if ($this->clam != null) {
            $result .= "$this->clam\n";
        }
        if ($this->pepperoni != null) {
            $result .= "$this->pepperoni\n";
        }

        return $result;
    }
}
