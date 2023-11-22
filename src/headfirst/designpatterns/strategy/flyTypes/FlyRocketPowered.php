<?php

namespace App\headfirst\designpatterns\strategy\flyTypes;

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm flying with a rocket\n";
    }
}
