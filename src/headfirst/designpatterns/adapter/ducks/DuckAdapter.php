<?php

namespace App\headfirst\designpatterns\adapter\ducks;

class DuckAdapter implements Turkey
{
    public Duck $duck;

    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

    public function gobble(): void
    {
        $this->duck->quack();
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->duck->fly();
        }
    }
}
