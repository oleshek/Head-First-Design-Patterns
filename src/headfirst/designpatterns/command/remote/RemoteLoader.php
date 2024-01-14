<?php

namespace App\headfirst\designpatterns\command\remote;

class RemoteLoader
{
    public static function main(): void
    {
        $remoteControl = new RemoteControl();

        $livingRoomLight = new Light('Living Room');
        $kitchenLight = new Light('Kitchen');
        $ceilingFan = new CeilingFan('Living Room');
        $garageDoor = new GarageDoor('Garage');
        $stereo = new Stereo('Living Room');

        $livingRoomLightOn = new LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LightOffCommand($livingRoomLight);

        $kitchenLightOn = new LightOnCommand($kitchenLight);
        $kitchenLightOff = new LightOffCommand($kitchenLight);

        $ceilingFanOn = new CeilingFanOnCommand($ceilingFan);
        $ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

        $garageDoorUp = new GarageDoorUpCommand($garageDoor);
        $garageDoorDown = new GarageDoorDownCommand($garageDoor);

        $stereoOnWithCD = new StereoOnWithCDCommand($stereo);
        $stereoOff = new StereoOffCommand($stereo);

        $remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
        $remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
        $remoteControl->setCommand(2, $ceilingFanOn, $ceilingFanOff);
        $remoteControl->setCommand(3, $garageDoorUp, $garageDoorDown);
        $remoteControl->setCommand(4, $stereoOnWithCD, $stereoOff);

        echo $remoteControl;

        $remoteControl->onButtonWasPushed(0);
        $remoteControl->offButtonWasPushed(0);
        $remoteControl->onButtonWasPushed(1);
        $remoteControl->offButtonWasPushed(1);
        $remoteControl->onButtonWasPushed(2);
        $remoteControl->offButtonWasPushed(2);
        $remoteControl->onButtonWasPushed(3);
        $remoteControl->offButtonWasPushed(3);
        $remoteControl->onButtonWasPushed(4);
        $remoteControl->offButtonWasPushed(4);
    }
}
