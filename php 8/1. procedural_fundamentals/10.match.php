<?php

$paymentStatus = 2;

$paymentDisplay = match($paymentStatus){
    1 =>  'paid',
    2 =>  'payment client',
    3 =>  'payment pending',
};

echo $paymentDisplay;