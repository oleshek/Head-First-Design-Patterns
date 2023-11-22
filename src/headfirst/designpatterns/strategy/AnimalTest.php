<?php

namespace App\headfirst\designpatterns\strategy;

class AnimalTest
{
    public static function main(): void
    {
        $at = new AnimalTest();
        $at->makeSomeAnimals();
    }

    public function makeSomeAnimals(): void
    {
        $dog = new Dog();
        $cat = new Cat();
        // treat dogs and cats as their supertype, Animal
        $animals = [$dog, $cat];
        foreach ($animals as $animal) {
            $animal->makeSound();
        }
    }
}

abstract class Animal
{
    abstract function makeSound(): void;
}

class Dog extends Animal
{
    public function makeSound(): void
    {
        $this->bark();
    }

    public function bark(): void
    {
        echo "Woof\n";
    }
}

class Cat extends Animal
{
    public function makeSound(): void
    {
        $this->meow();
    }

    public function meow(): void
    {
        echo "Meow\n";
    }
}
