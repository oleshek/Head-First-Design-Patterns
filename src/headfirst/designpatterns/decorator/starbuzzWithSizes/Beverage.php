<?php

namespace App\headfirst\designpatterns\decorator\starbuzzWithSizes;

enum Size
{
    case TALL;
    case GRANDE;
    case VENTI;
}

abstract class Beverage
{
    public Size $size = Size::TALL;
    public string $description = 'Unknown Beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setSize(Size $size): void
    {
        $this->size = $size;
    }

    public function getSize(): Size
    {
        return $this->size;
    }

    public abstract function cost(): float;
}
