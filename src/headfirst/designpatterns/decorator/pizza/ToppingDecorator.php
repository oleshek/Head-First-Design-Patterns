<?php

namespace App\headfirst\designpatterns\decorator\pizza;

abstract class ToppingDecorator extends Pizza
{
    public Pizza $pizza;
}
