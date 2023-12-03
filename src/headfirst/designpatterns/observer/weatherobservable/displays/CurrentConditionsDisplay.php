<?php

namespace App\headfirst\designpatterns\observer\weatherobservable\displays;

use App\headfirst\designpatterns\observer\weatherobservable\WeatherData;

class CurrentConditionsDisplay implements \SplObserver, DisplayElement
{
    private float $temperature;
    private float $humidity;

    public function update(\SplSubject $subject): void
    {
        if ($subject instanceof WeatherData) {
            $this->temperature = $subject->getTemperature();
            $this->humidity = $subject->getHumidity();
            $this->display();
        }
    }

    public function display(): void
    {
        echo "Current conditions: $this->temperature F degrees and $this->humidity% humidity\n";
    }
}





