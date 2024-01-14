<?php

namespace App\headfirst\designpatterns\command\party;

class RemoteLoader
{
    public static function main(): void
    {
        $remoteControl = new RemoteControl();

        $light = new Light('Living Room');
        $tv = new TV('Living Room');
        $stereo = new Stereo('Living Room');
        $hottub = new Hottub();

        $lightOn = new LightOnCommand($light);
        $stereoOn = new StereoOnCommand($stereo);
        $tvOn = new TVOnCommand($tv);
        $hottubOn = new HottubOnCommand($hottub);
        $lightOff = new LightOffCommand($light);
        $stereoOff = new StereoOffCommand($stereo);
        $tvOff = new TVOffCommand($tv);
        $hottubOff = new HottubOffCommand($hottub);

        $partyOn = [$lightOn, $stereoOn, $tvOn, $hottubOn];
        $partyOff = [$lightOff, $stereoOff, $tvOff, $hottubOff];

        $partyOnMacro = new MacroCommand($partyOn);
        $partyOffMacro = new MacroCommand($partyOff);

        $remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);

        echo $remoteControl;
        echo "--- Pushing Macro On---\n";
        $remoteControl->onButtonWasPushed(0);
        echo "--- Pushing Macro Off---\n";
        $remoteControl->offButtonWasPushed(0);
    }
}
