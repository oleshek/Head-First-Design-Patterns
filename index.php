<?php

use App\headfirst\designpatterns\factory\pizzas\PizzaTestDrive as PizzaSTestDrive;
use App\headfirst\designpatterns\factory\pizzafm\PizzaTestDrive as PizzaFMTestDrive;
use App\headfirst\designpatterns\factory\pizzaaf\PizzaTestDrive as PizzaAFTestDrive;
use App\headfirst\designpatterns\observer\simple\Example as Simple;
use App\headfirst\designpatterns\observer\simpleobservable\Example as SimpleObservable;
use App\headfirst\designpatterns\observer\weather\WeatherStation;
use App\headfirst\designpatterns\observer\weather\WeatherStationHeatIndex;
use App\headfirst\designpatterns\observer\weatherobservable\WeatherStation as ObservableWeatherStation;
use App\headfirst\designpatterns\observer\weatherobservable\WeatherStationHeatIndex as ObservableWeatherStationHeatIndex;
use App\headfirst\designpatterns\strategy\AnimalTest;
use App\headfirst\designpatterns\strategy\MiniDuckSimulator;
use App\headfirst\designpatterns\strategy\MiniDuckSimulator1;

require './vendor/autoload.php';

// PizzaSTestDrive::main();
// PizzaFMTestDrive::main();
// PizzaAFTestDrive::main();

// AnimalTest::main();
// MiniDuckSimulator::main();
// MiniDuckSimulator1::main();

Simple::main();
// SimpleObservable::main();
// WeatherStation::main();
// WeatherStationHeatIndex::main();
// ObservableWeatherStation::main();
// ObservableWeatherStationHeatIndex::main();
