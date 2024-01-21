<?php

namespace App\headfirst\designpatterns\adapter\ducks;

class TurkeyTestDrive
{
    public static function main(): void
    {
        $duck = new MallardDuck();
        $duckAdapter = new DuckAdapter($duck);

        for ($i = 0; $i < 10; $i++) {
            echo "\nThe DuckAdapter says...\n";
            $duckAdapter->gobble();
            $duckAdapter->fly();
        }
    }
}
