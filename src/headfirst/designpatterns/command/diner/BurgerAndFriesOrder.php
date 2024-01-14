<?php

namespace App\headfirst\designpatterns\command\diner;

class BurgerAndFriesOrder implements Order
{
    public Cook $cook;

    public function __construct(Cook $cook)
    {
        $this->cook = $cook;
    }

    public function orderUp(): void
    {
        $this->cook->makeBurger();
        $this->cook->makeFries();
    }
}
