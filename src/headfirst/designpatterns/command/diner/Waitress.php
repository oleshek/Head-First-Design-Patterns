<?php

namespace App\headfirst\designpatterns\command\diner;

class Waitress
{
    public Order $order;

    public function takeOrder(Order $order): void
    {
        $this->order = $order;
        $this->order->orderUp();
    }
}
