<?php

namespace App\headfirst\designpatterns\observer\simple;

class SimpleObserver implements Observer
{
    private int $value;
    private Subject $simpleSubject;

    public function __construct(Subject $simpleSubject)
    {
        $this->simpleSubject = $simpleSubject;
        $this->simpleSubject->registerObserver($this);
    }

    public function update(int $value): void
    {
        $this->value = $value;
        $this->display();
    }

    public function display(): void
    {
        echo "Value: $this->value\n";
    }
}
