<?php

namespace App\headfirst\designpatterns\strategy\duckTypes;

use App\headfirst\designpatterns\strategy\flyTypes\FlyWithWings;
use App\headfirst\designpatterns\strategy\quackTypes\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display(): void
    {
        echo "I'm a real Mallard duck\n";
    }
}
