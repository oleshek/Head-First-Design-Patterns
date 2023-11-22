<?php

namespace App\headfirst\designpatterns\strategy\duckTypes;

use App\headfirst\designpatterns\strategy\flyTypes\FlyBehavior;
use App\headfirst\designpatterns\strategy\quackTypes\QuackBehavior;

abstract class Duck
{
    public $flyBehavior;
    public $quackBehavior;

    public function setFlyBehavior(FlyBehavior $fb): void
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb): void
    {
        $this->quackBehavior = $qb;
    }

    abstract function display(): void;

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function swim(): void
    {
        echo "All ducks float, even decoys!\n";
    }
}
