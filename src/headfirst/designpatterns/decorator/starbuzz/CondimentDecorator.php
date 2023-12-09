<?php

namespace App\headfirst\designpatterns\decorator\starbuzz;

abstract class CondimentDecorator extends Beverage
{
    public Beverage $beverage;
}
