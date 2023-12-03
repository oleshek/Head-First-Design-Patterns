<?php

namespace App\headfirst\designpatterns\observer\weather;

interface Subject
{
    public function registerObserver(Observer $o): void;

    public function removeObserver(Observer $o): void;

    public function notifyObservers(): void;
}
