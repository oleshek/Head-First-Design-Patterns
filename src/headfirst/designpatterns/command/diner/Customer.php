<?php

namespace App\headfirst\designpatterns\command\diner;

class Customer
{
    public Waitress $waitress;
    public Order $order;

    public function __construct(Waitress $waitress)
    {
        $this->waitress = $waitress;
    }

    public function createOrder(Order $order): void
    {
        $this->order = $order;
    }

    public function hungry(): void
    {
        $this->waitress->takeOrder($this->order);
    }
}
