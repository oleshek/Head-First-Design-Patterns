<?php

namespace App\headfirst\designpatterns\command\party;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}
