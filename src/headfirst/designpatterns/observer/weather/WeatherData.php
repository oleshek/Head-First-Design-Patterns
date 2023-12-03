<?php

namespace App\headfirst\designpatterns\observer\weather;

class WeatherData implements Subject
{
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $o): void
    {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o): void
    {
        $key = array_search($o, $this->observers, true);

        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}
