<?php

namespace App\headfirst\designpatterns\observer\weatherobservable\displays;

use App\headfirst\designpatterns\observer\weatherobservable\WeatherData;

class HeatIndexDisplay implements \SplObserver, DisplayElement
{
    public float $heatIndex = 0.0;

    public function update(\SplSubject $subject): void
    {
        if ($subject instanceof WeatherData) {
			$t = $subject->getTemperature();
			$rh = $subject->getHumidity();
			$this->heatIndex = (float)
            (
                (16.923 + (0.185212 * $t)) +
                (5.37941 * $rh) -
                (0.100254 * $t * $rh) +
                (0.00941695 * ($t * $t)) +
                (0.00728898 * ($rh * $rh)) +
                (0.000345372 * ($t * $t * $rh)) -
                (0.000814971 * ($t * $rh * $rh)) +
                (0.0000102102 * ($t * $t * $rh * $rh)) -
                (0.000038646 * ($t * $t * $t)) +
                (0.0000291583 * ($rh * $rh * $rh)) +
                (0.00000142721 * ($t * $t * $t * $rh)) +
                (0.000000197483 * ($t * $rh * $rh * $rh)) -
                (0.0000000218429 * ($t * $t * $t * $rh * $rh)) +
                (0.000000000843296 * ($t * $t * $rh * $rh * $rh)) -
                (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
			$this->display();
		}
    }

    public function display(): void
    {
        echo "Heat index is $this->heatIndex\n";
    }
}
