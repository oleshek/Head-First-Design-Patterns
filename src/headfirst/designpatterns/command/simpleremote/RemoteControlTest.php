<?php

namespace App\headfirst\designpatterns\command\simpleremote;

class RemoteControlTest
{
    public static function main(): void
    {
        $remote = new SimpleRemoteControl();
        $light = new Light();
        $garageDoor = new GarageDoor();
        $lightOn = new LightOnCommand($light);
        $lightOff = new LightOffCommand($light);
        $garageOpen = new GarageDoorOpenCommand($garageDoor);

        $remote->setCommand($lightOn);
        $remote->buttonWasPressed();
        $remote->setCommand($lightOff);
        $remote->buttonWasPressed();
        $remote->setCommand($garageOpen);
        $remote->buttonWasPressed();
    }
}
