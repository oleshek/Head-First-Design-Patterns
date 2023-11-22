<?php

namespace App\headfirst\designpatterns\strategy\flyTypes;

class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "I can't fly\n";
    }
}
