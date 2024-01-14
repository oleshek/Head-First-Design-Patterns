<?php

namespace App\headfirst\designpatterns\command\undo;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}
