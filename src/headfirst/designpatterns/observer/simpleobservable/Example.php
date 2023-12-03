<?php

namespace App\headfirst\designpatterns\observer\simpleobservable;

class Example
{
    public static function main(): void
    {
        $simpleSubject_1 = new SimpleSubject('subject 1');
        $simpleObserver_1 = new SimpleObserver('observer 1');
        $simpleObserver_2 = new SimpleObserver('observer 2');

        $simpleSubject_1->attach($simpleObserver_1);
        $simpleSubject_1->attach($simpleObserver_2);
        $simpleSubject_1->setValue(79);

        $simpleSubject_1->detach($simpleObserver_1);
        $simpleSubject_1->setValue(80);
    }
}
