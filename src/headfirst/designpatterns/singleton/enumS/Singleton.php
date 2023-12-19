<?php

namespace App\headfirst\designpatterns\singleton\enumS;

enum Singleton
{
    case UNIQUE_INSTANCE;

    // other useful fields here

    // other useful methods here
    public function getDescription(): string
    {
        return "I'm a thread safe Singleton!\n";
    }
}
