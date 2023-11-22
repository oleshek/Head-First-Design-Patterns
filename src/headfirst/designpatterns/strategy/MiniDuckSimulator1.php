<?php

namespace App\headfirst\designpatterns\strategy;

use App\headfirst\designpatterns\strategy\duckTypes\MallardDuck;
use App\headfirst\designpatterns\strategy\duckTypes\ModelDuck;
use App\headfirst\designpatterns\strategy\flyTypes\FlyRocketPowered;
use App\headfirst\designpatterns\strategy\quackTypes\FakeQuack;

class MiniDuckSimulator1
{
    public static function main(): void
    {
        $mallard = new MallardDuck();
        $mallard->performQuack();
        $mallard->performFly();

        $model = new ModelDuck();
        $model->performFly();
        $model->setFlyBehavior(new FlyRocketPowered());
        $model->performFly();
        $model->performQuack();
        $model->setQuackBehavior(new FakeQuack());
        $model->performQuack();
    }
}
