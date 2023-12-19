<?php

namespace App\headfirst\designpatterns\singleton\classic;

class Singleton
{
    private static ?Singleton $uniqueInstance = null;

    private function __construct()
    {
    }

    public static function getInstance(): Singleton
    {
        if (self::$uniqueInstance == null) {
            self::$uniqueInstance = new Singleton();
        }

        return self::$uniqueInstance;
    }

    // other useful methods here
    public function getDescription(): string
    {
        return "I'm a classic Singleton!\n";
    }
}
