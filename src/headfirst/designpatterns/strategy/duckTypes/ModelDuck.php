<?php

namespace App\headfirst\designpatterns\strategy\duckTypes;

use App\headfirst\designpatterns\strategy\flyTypes\FlyNoWay;
use App\headfirst\designpatterns\strategy\quackTypes\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "I'm a model duck\n";
    }
}
