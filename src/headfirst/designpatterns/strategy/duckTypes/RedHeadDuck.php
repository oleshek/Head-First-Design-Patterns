<?php

namespace App\headfirst\designpatterns\strategy\duckTypes;

use App\headfirst\designpatterns\strategy\flyTypes\FlyWithWings;
use App\headfirst\designpatterns\strategy\quackTypes\Quack;

class RedHeadDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "I'm a real Red Headed duck\n";
    }
}
