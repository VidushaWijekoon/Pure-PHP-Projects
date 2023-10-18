<?php 

require_once '../Transaction.php';

// Create Instance
$transaction = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);
        
// var_dump($transaction);
$amount = $transaction->getAmount();
var_dump($amount);