<?php

namespace App\headfirst\designpatterns\observer\weather;

use App\headfirst\designpatterns\observer\weather\displays\CurrentConditionsDisplay;
use App\headfirst\designpatterns\observer\weather\displays\ForecastDisplay;
use App\headfirst\designpatterns\observer\weather\displays\HeatIndexDisplay;
use App\headfirst\designpatterns\observer\weather\displays\StatisticsDisplay;

class WeatherStationHeatIndex
{
    public static function main(): void
    {
        $weatherData = new WeatherData();
        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $forecastDisplay = new ForecastDisplay($weatherData);
        $heatIndexDisplay = new HeatIndexDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        echo "\n";
        $weatherData->setMeasurements(82, 70, 29.2);
        echo "\n";
        $weatherData->setMeasurements(78, 90, 29.2);
        echo "\n";
        $weatherData->setMeasurements(75, 30, 31);
    }
}
