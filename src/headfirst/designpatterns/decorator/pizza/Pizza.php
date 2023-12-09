<?php

namespace App\headfirst\designpatterns\decorator\pizza;

abstract class Pizza
{
    public string $description = 'Basic Pizza';

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}
