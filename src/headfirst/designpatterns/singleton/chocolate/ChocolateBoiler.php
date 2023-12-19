<?php

namespace App\headfirst\designpatterns\singleton\chocolate;

class ChocolateBoiler
{
    private bool $empty;
    private bool $boiled;
    private static ?ChocolateBoiler $uniqueInstance = null;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance(): ChocolateBoiler
    {
        if (self::$uniqueInstance == null) {
            echo "Creating unique instance of Chocolate Boiler\n";
            self::$uniqueInstance = new ChocolateBoiler();
        }
        echo "Returning instance of Chocolate Boiler\n";

        return self::$uniqueInstance;
    }

    public function fill(): void
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
            // fill the boiler with a milk/chocolate mixture
        }
    }

    public function drain(): void
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            // drain the boiled milk and chocolate
            $this->empty = true;
        }
    }

    public function boil(): void
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            // bring the contents to a boil
            $this->boiled = true;
        }
    }

    public function isEmpty(): bool
    {
        return $this->empty;
    }

    public function isBoiled(): bool
    {
        return $this->boiled;
    }
}
