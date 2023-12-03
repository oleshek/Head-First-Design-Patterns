<?php

namespace App\headfirst\designpatterns\observer\weather\displays;

use App\headfirst\designpatterns\observer\weather\Observer;
use App\headfirst\designpatterns\observer\weather\WeatherData;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private float $humidity;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display(): void
    {
        echo "Current conditions: $this->temperature F degrees and $this->humidity% humidity\n";
    }
}
