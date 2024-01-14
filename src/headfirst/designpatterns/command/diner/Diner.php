<?php

namespace App\headfirst\designpatterns\command\diner;

class Diner
{
    public static function main(): void
    {
        $cook = new Cook();
        $waitress = new Waitress();
        $customer = new Customer($waitress);
        $customer->createOrder(new BurgerAndFriesOrder($cook));
        $customer->hungry();
    }
}
