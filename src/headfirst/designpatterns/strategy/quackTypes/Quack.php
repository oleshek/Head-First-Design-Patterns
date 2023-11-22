<?php

namespace App\headfirst\designpatterns\strategy\quackTypes;

class Quack implements QuackBehavior
{
    public function quack(): void
    {
        echo "Quack\n";
    }
}
