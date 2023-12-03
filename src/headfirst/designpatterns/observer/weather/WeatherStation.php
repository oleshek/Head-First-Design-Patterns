<?php

namespace App\headfirst\designpatterns\observer\weather;

use App\headfirst\designpatterns\observer\weather\displays\CurrentConditionsDisplay;
use App\headfirst\designpatterns\observer\weather\displays\ForecastDisplay;
use App\headfirst\designpatterns\observer\weather\displays\StatisticsDisplay;

class WeatherStation
{
    public static function main(): void
    {
        $weatherData = new WeatherData();

        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        echo "\n";
        $weatherData->setMeasurements(82, 70, 29.2);
        echo "\n";
        $weatherData->setMeasurements(78, 90, 29.2);
        echo "\n";

        $weatherData->removeObserver($forecastDisplay);
        $weatherData->setMeasurements(62, 90, 28.1);
    }
}
