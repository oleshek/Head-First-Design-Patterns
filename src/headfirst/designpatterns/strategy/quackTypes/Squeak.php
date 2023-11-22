<?php

namespace App\headfirst\designpatterns\strategy\quackTypes;

class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        echo "Squeak\n";
    }
}
