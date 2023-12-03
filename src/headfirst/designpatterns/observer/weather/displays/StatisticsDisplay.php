<?php

namespace App\headfirst\designpatterns\observer\weather\displays;

use App\headfirst\designpatterns\observer\weather\Observer;
use App\headfirst\designpatterns\observer\weather\WeatherData;

class StatisticsDisplay implements Observer, DisplayElement
{
    private float $maxTemp = 0.0;
    private float $minTemp = 200;
    private float $tempSum = 0.0;
    private int $numReadings = 0;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->numReadings++;
        $this->tempSum += $temperature;

        if ($temperature > $this->maxTemp) {
            $this->maxTemp = $temperature;
        }

        if ($temperature < $this->minTemp) {
            $this->minTemp = $temperature;
        }
        $this->display();
    }

    public function display(): void
    {
        echo 'Avg/Max/Min temperature = '.($this->tempSum / $this->numReadings)."/$this->maxTemp/$this->minTemp\n";
    }
}
