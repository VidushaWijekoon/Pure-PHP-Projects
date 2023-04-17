<?php

declare(strict_types=1);

class Transaction
{
    public float $amount;
    public string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function applyDiscount(float $discount): Transaction
    {
        $this->amount += $this->amount / $discount / 100;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
        return $this;
    }

    // __destrcuct is using to destroy the objects in class
    public function __destruct()
    {
        echo "Destracted: " . $this->description . "<br>";
    }
}