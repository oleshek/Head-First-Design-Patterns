<?php

namespace App\headfirst\designpatterns\decorator\starbuzzWithSizes;

class StarbuzzCoffee
{
    public static function main(): void
    {
        $beverage = new Espresso();
        echo $beverage->getDescription().' $'.self::formatPrice($beverage->cost())."\n";

        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        echo $beverage2->getDescription().' $'.self::formatPrice($beverage2->cost())."\n";

        $beverage3 = new HouseBlend();
        $beverage3->setSize(Size::VENTI);
        $beverage3 = new Soy($beverage3);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        echo $beverage3->getDescription().' $'.self::formatPrice($beverage3->cost())."\n";
    }

    public static function formatPrice($price): string
    {
        return number_format($price, 2, '.', '');
    }
}
