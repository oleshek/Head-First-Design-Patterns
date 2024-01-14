<?php

namespace App\headfirst\designpatterns\command\party;

class NoCommand implements Command
{
    public function execute(): void
    {
    }

    public function undo(): void
    {
    }
}
