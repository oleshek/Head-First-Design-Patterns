<?php

namespace App\headfirst\designpatterns\command\party;

//
// This is the invoker
//
class RemoteControl
{
    public array $onCommands = [];
    public array $offCommands = [];
    public Command $undoCommand;

    public function __construct()
    {
        $noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
    }

    public function __toString(): string
    {
        $str = "\n------ Remote Control -------\n";
        for ($i = 0; $i < count($this->onCommands); $i++) {
            $str .= "[slot $i] ".get_class($this->onCommands[$i]);
            $str .= '    '.get_class($this->offCommands[$i])."\n";
        }
        $str .= '[undo] '.get_class($this->undoCommand)."\n";

        return $str;
    }
}
