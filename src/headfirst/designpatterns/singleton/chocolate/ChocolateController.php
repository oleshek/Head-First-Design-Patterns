<?php

namespace App\headfirst\designpatterns\singleton\chocolate;

class ChocolateController
{
    public static function main(): void
    {
        $boiler = ChocolateBoiler::getInstance();
        $boiler->fill();
        $boiler->boil();
        $boiler->drain();

        // will return the existing instance
        $boiler2 = ChocolateBoiler::getInstance();
    }
}
