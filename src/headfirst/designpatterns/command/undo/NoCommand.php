<?php

namespace App\headfirst\designpatterns\command\undo;

class NoCommand implements Command
{
    public function execute(): void
    {
    }

    public function undo(): void
    {
    }
}
