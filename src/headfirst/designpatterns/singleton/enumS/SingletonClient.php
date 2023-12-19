<?php

namespace App\headfirst\designpatterns\singleton\enumS;

class SingletonClient
{
    public static function main(): void
    {
        $singleton = Singleton::UNIQUE_INSTANCE;
        echo $singleton->getDescription();
    }
}
