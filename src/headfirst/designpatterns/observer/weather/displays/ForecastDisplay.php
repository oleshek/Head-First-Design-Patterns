<?php

namespace App\headfirst\designpatterns\observer\weather\displays;

use App\headfirst\designpatterns\observer\weather\Observer;
use App\headfirst\designpatterns\observer\weather\WeatherData;

class ForecastDisplay implements Observer, DisplayElement
{
    private float $currentPressure = 29.92;
    private float $lastPressure;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
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
