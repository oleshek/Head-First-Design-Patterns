<?php

namespace App\headfirst\designpatterns\strategy\quackTypes;

class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        echo "<< Silence >>\n";
    }
}
