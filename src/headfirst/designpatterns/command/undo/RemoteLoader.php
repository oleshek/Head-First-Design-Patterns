<?php

namespace App\headfirst\designpatterns\command\undo;

class RemoteLoader
{
    public static function main(): void
    {
        $remoteControl = new RemoteControlWithUndo();

        $livingRoomLight = new Light('Living Room');
        $livingRoomLightOn = new LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LightOffCommand($livingRoomLight);

        $remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
        $remoteControl->onButtonWasPushed(0);
        $remoteControl->offButtonWasPushed(0);

        echo $remoteControl;

        $remoteControl->undoButtonWasPushed();
        $remoteControl->offButtonWasPushed(0);
        $remoteControl->onButtonWasPushed(0);

        echo $remoteControl;
        $remoteControl->undoButtonWasPushed();

        $ceilingFan = new CeilingFan('Living Room');

        $ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
        $ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
        $ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

        $remoteControl->setCommand(0, $ceilingFanMedium, $ceilingFanOff);
        $remoteControl->setCommand(1, $ceilingFanHigh, $ceilingFanOff);

        $remoteControl->onButtonWasPushed(0);
        $remoteControl->offButtonWasPushed(0);
        echo $remoteControl;
        $remoteControl->undoButtonWasPushed();

        $remoteControl->onButtonWasPushed(1);
        echo $remoteControl;
        $remoteControl->undoButtonWasPushed();
    }
}
