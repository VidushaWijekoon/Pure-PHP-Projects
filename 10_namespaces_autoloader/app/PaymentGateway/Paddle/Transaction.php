<?php

declare(strict_types=1);

namespace app\PaymentGateway\Paddle;

class Transaction
{
    // define static methods in php
    private static int $count = 10;

    public function __construct(
        public float $amout, 
        public string $description
    )
    {
        self::$count++;
    }

    public static function getCount(): int{
        return self::$count;
    }

    public function process(){
        echo "Processing paddle transaction";
    }
}