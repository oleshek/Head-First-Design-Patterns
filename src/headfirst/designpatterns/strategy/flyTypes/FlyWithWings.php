<?php

namespace App\headfirst\designpatterns\strategy\flyTypes;

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm flying!!\n";
    }
}
