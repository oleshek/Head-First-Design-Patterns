<?php

namespace App\headfirst\designpatterns\observer\simpleobservable;

class SimpleObserver implements \SplObserver
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(\SplSubject $subject): void
    {
        echo $this->name.' was notified that value had changed to '.$subject->getValue()."\n";
    }
}
