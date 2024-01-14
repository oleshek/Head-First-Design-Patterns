<?php

namespace App\headfirst\designpatterns\command\party;

class MacroCommand implements Command
{
    public array $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        for ($i = 0; $i < count($this->commands); $i++) {
            $this->commands[$i]->execute();
        }
    }

    /**
     * NOTE:  these commands have to be done backwards to ensure
     * proper undo functionality
     */
    public function undo(): void
    {
        for ($i = count($this->commands) - 1; $i >= 0; $i--) {
            $this->commands[$i]->undo();
        }
    }
}
