<?php

namespace App\headfirst\designpatterns\singleton\classic;

class SingletonClient
{
    public static function main(): void
    {
        $singleton = Singleton::getInstance();
        echo $singleton->getDescription();
    }
}
