<?php

namespace App\headfirst\designpatterns\observer\simple;

interface Observer
{
    public function update(int $value): void;
}
