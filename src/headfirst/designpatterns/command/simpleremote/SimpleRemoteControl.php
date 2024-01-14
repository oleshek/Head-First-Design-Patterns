<?php

namespace App\headfirst\designpatterns\command\simpleremote;

//
// This is the invoker
//
class SimpleRemoteControl
{
    public Command $slot;

    public function setCommand(Command $command): void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}
