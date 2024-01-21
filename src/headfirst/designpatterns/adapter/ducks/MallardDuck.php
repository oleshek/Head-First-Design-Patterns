<?php

namespace App\headfirst\designpatterns\adapter\ducks;

class MallardDuck implements Duck
{
    public function quack(): void
    {
        echo "Quack\n";
    }

    public function fly(): void
    {
        echo "I'm flying\n";
    }
}
