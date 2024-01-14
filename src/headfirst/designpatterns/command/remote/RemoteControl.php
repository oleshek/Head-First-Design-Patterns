<?php

namespace App\headfirst\designpatterns\command\remote;

//
// This is the invoker
//
class RemoteControl
{
    public array $onCommands = [];
    public array $offCommands = [];

    public function __construct()
    {
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = new \stdClass();
            $this->offCommands[$i] = new \stdClass();
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
    }

    public function __toString(): string
    {
        $str = "------ Remote Control -------\n";
        for ($i = 0; $i < count($this->onCommands); $i++) {
            $str .= "[slot $i] ".get_class($this->onCommands[$i]);
            $str .= '    '.get_class($this->offCommands[$i])."\n";
        }

        return $str;
    }
}
