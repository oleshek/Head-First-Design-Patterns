<?php

namespace App\headfirst\designpatterns\strategy\quackTypes;

class FakeQuack implements QuackBehavior
{
    public function quack(): void
    {
        echo "Qwak\n";
    }
}
