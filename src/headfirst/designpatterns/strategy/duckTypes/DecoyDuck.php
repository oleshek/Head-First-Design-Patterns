<?php

namespace App\headfirst\designpatterns\strategy\duckTypes;

use App\headfirst\designpatterns\strategy\flyTypes\FlyNoWay;
use App\headfirst\designpatterns\strategy\quackTypes\MuteQuack;

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new MuteQuack());
    }

    public function display(): void
    {
        echo "I'm a duck Decoy\n";
    }
}
