<?php

namespace App\headfirst\designpatterns\strategy;

use App\headfirst\designpatterns\strategy\duckTypes\DecoyDuck;
use App\headfirst\designpatterns\strategy\duckTypes\MallardDuck;
use App\headfirst\designpatterns\strategy\duckTypes\ModelDuck;
use App\headfirst\designpatterns\strategy\duckTypes\RubberDuck;
use App\headfirst\designpatterns\strategy\flyTypes\FlyRocketPowered;

class MiniDuckSimulator
{
    public static function main(): void
    {
        $rubberDuckie = new RubberDuck();
        $mallard = new MallardDuck();
        $decoy = new DecoyDuck();

        $model = new ModelDuck();

        $rubberDuckie->performQuack();
        $mallard->performQuack();
        $decoy->performQuack();

        $model->performFly();
        $model->setFlyBehavior(new FlyRocketPowered());
        $model->performFly();
    }
}
