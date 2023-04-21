<?php 

declare(strict_types = 1);

class Transation{
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function setAmount(float $amount){
        $this->amount;
    }

    public function process(){
        echo 'Processing' . $this->amount . ' transaction';
    }
}