<?php

declare(strict_types=1);
require 'Transactions.php';

// Create instance of the class

$transactions = new Transaction(100, 'Trasaction 1');
// $transactions->amount = 15;
print_r($transactions);
echo "<pre>";
print_r($transactions->amount);
echo "</pre>";

echo "<br>";
echo "Tax: ";
$x = new Transaction(5, "Transaction 1");
$x->addTax(8);
print_r($x);
echo "<br>";

echo "<br>";
echo "Dicount: ";
$y = new Transaction(5, "Transaction 1");
$y->applyDiscount(10);
print_r($y);
echo "<br>";

$amount = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

var_dump($amount);
echo "<br>";

$amount1 = (new Transaction(1052, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

var_dump($amount1);

// create cutome class
$obj = new \stdClass();

$obj->a = 1;
$obj->b = 2;
var_dump($obj);
echo "<br>";
// use Json
$str = '{"a": 1, "b": 2, "c": 3}';
$arr = json_decode($str, true);
var_dump($arr);
echo "<br>";

$arr1 = [1, 2, 3];
$obj1  = (object) $arr1;
var_dump($obj1);