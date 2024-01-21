<?php

namespace App\headfirst\designpatterns\adapter\ducks;

use App\headfirst\designpatterns\adapter\ducks\challenge\DroneAdapter;
use App\headfirst\designpatterns\adapter\ducks\challenge\SuperDrone;

class DuckTestDrive
{
    public static function main(): void
    {
        $duck = new MallardDuck();
        $turkey = new WildTurkey();
        $turkeyAdapter = new TurkeyAdapter($turkey);

        echo "The Turkey says...\n";
        $turkey->gobble();
        $turkey->fly();

        echo "\nThe Duck says...\n";
        self::testDuck($duck);

        echo "\nThe TurkeyAdapter says...\n";
        self::testDuck($turkeyAdapter);

        // Challenge
        $drone = new SuperDrone();
        $droneAdapter = new DroneAdapter($drone);
        echo "\nThe SuperDrone says...\n";
        self::testDuck($droneAdapter);
    }

    public static function testDuck(Duck $duck): void
    {
        $duck->quack();
        $duck->fly();
    }
}
