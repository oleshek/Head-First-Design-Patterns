<?php

namespace App\headfirst\designpatterns\observer\simple;

interface Subject
{
    public function registerObserver(Observer $o): void;

    public function removeObserver(Observer $o): void;

    public function notifyObservers(): void;
}
