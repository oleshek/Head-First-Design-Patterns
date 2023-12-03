<?php

namespace App\headfirst\designpatterns\observer\weather;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure): void;
}
