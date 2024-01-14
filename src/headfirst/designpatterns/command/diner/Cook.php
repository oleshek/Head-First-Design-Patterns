<?php

namespace App\headfirst\designpatterns\command\diner;

class Cook
{
    public function makeBurger(): void
    {
        echo "Making a burger\n";
    }

    public function makeFries(): void
    {
        echo "Making fries\n";
    }
}
