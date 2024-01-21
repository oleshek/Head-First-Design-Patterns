<?php

namespace App\headfirst\designpatterns\adapter\ducks;

interface Turkey
{
    public function gobble(): void;

    public function fly(): void;
}
