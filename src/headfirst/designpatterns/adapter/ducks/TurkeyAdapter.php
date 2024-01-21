<?php

namespace App\headfirst\designpatterns\adapter\ducks;

class TurkeyAdapter implements Duck
{
    public Turkey $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
