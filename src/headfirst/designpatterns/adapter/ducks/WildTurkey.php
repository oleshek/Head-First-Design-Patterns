<?php

namespace App\headfirst\designpatterns\adapter\ducks;

class WildTurkey implements Turkey
{
    public function gobble(): void
    {
        echo "Gobble gobble\n";
    }

    public function fly(): void
    {
        echo "I'm flying a short distance\n";
    }
}
