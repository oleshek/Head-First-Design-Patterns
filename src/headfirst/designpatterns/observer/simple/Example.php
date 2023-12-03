<?php

namespace App\headfirst\designpatterns\observer\simple;

class Example
{
    public static function main(): void
    {
        $simpleSubject = new SimpleSubject();
        $simpleObserver = new SimpleObserver($simpleSubject);

        $simpleSubject->setValue(80);
        $simpleSubject->removeObserver($simpleObserver);
    }
}
