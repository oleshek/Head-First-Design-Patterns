<?php

namespace App\headfirst\designpatterns\observer\weatherobservable\displays;

use App\headfirst\designpatterns\observer\weatherobservable\WeatherData;

class StatisticsDisplay implements \SplObserver, DisplayElement
{
    private float $maxTemp = 0.0;
    private float $minTemp = 200;
    private float $tempSum = 0.0;
    private int $numReadings = 0;

    public function update(\SplSubject $subject): void
    {
        if ($subject instanceof WeatherData) {
            $temp = $subject->getTemperature();
            $this->tempSum += $temp;
            $this->numReadings++;

            if ($temp > $this->maxTemp) {
                $this->maxTemp = $temp;
            }

            if ($temp < $this->minTemp) {
                $this->minTemp = $temp;
            }
            $this->display();
        }
    }

    public function display(): void
    {
        echo 'Avg/Max/Min temperature = '.($this->tempSum / $this->numReadings)."/$this->maxTemp/$this->minTemp\n";
    }
}
