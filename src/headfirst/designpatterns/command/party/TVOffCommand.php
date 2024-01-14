<?php

namespace App\headfirst\designpatterns\command\party;

class TVOffCommand implements Command {
	public TV $tv;

	public function __construct(TV $tv) {
		$this->tv= $tv;
	}

	public function execute():void {
		$this->tv->off();
	}

	public function undo():void {
        $this->tv->on();
	}
}
