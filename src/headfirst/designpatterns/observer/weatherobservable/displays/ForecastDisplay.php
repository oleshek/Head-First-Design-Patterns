<?php

namespace App\headfirst\designpatterns\observer\weatherobservable\displays;

use App\headfirst\designpatterns\observer\weatherobservable\WeatherData;

class ForecastDisplay implements \SplObserver, DisplayElement
{
    private float $currentPressure = 29.92;
    private float $lastPressure;

    public function update(\SplSubject $subject): void
    {
        if ($subject instanceof WeatherData) {
            $this->lastPressure = $this->currentPressure;
            $this->currentPressure = $subject->getPressure();
            $this->display();
        }
    }

    public function display(): void
    {
        echo 'Forecast: ';
        if ($this->currentPressure > $this->lastPressure) {
            echo "Improving weather on the way!\n";
        } elseif ($this->currentPressure == $this->lastPressure) {
            echo "More of the same\n";
        } elseif ($this->currentPressure < $this->lastPressure) {
            echo "Watch out for cooler, rainy weather\n";
        }
    }
}
