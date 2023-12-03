<?php

namespace App\headfirst\designpatterns\observer\weatherobservable;

use App\headfirst\designpatterns\observer\weatherobservable\displays\CurrentConditionsDisplay;
use App\headfirst\designpatterns\observer\weatherobservable\displays\ForecastDisplay;
use App\headfirst\designpatterns\observer\weatherobservable\displays\HeatIndexDisplay;
use App\headfirst\designpatterns\observer\weatherobservable\displays\StatisticsDisplay;

class WeatherStationHeatIndex
{

    public static function main(): void
    {
        $weatherData = new WeatherData();
        $currentConditions = new CurrentConditionsDisplay();
        $statisticsDisplay = new StatisticsDisplay();
        $forecastDisplay = new ForecastDisplay();
        $heatIndexDisplay = new HeatIndexDisplay();

        $weatherData->attach($currentConditions);
        $weatherData->attach($statisticsDisplay);
        $weatherData->attach($forecastDisplay);
        $weatherData->attach($heatIndexDisplay);

        $weatherData->setMeasurements(80, 65, 30.4);
        echo "\n";
        $weatherData->setMeasurements(82, 70, 29.2);
        echo "\n";
        $weatherData->setMeasurements(78, 90, 29.2);
    }
}
