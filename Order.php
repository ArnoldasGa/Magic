<?php

class Order
{
    protected string $state;
    protected float $amount;
    protected string $customerEmail;

    public function __construct($state, $amount, $customerEmail)
    {
        $this->state = $state;
        $this->amount = $amount;
        $this->customerEmail = $customerEmail;
    }

    public function __clone()
    {
        $this->state = "new";
    }

    public function __toString() : string
    {
        return "Atliktas užsakymas sumos: " . $this->amount . " kliento email: " . $this->customerEmail . ". Jo būsena: " . $this->state;
    }
}