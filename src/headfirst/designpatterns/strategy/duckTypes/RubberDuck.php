<?php

namespace App\headfirst\designpatterns\strategy\duckTypes;

use App\headfirst\designpatterns\strategy\flyTypes\FlyNoWay;
use App\headfirst\designpatterns\strategy\quackTypes\Squeak;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    public function display(): void
    {
        echo "I'm a rubber duckie\n";
    }
}
