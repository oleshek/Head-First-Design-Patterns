<?php

namespace App\headfirst\designpatterns\adapter\ducks;

interface Duck
{
    public function quack(): void;

    public function fly(): void;
}
