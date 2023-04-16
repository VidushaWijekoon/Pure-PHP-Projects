<?php

// nothing return 

declare(strict_types=1);

// function nothing_return(): 
// function nothing_return(): int|float|string|array
function nothing_return(): mixed
{
    return [1.5];
}

var_dump(nothing_return());
echo "<br>";

function sum(int|float $a, int|float $b)
{ // parameters
    return $a * $b;
}

echo sum(3, 3); // Arguments
echo "<br>";

function foo(int|float $x, int|float $y)
{
    if ($x % 2 === 0) {
        $x /= 2;
    }
    return $x * $y;
}

$i = 6.0;
$j = 7;

echo foo($i, $j);
echo "<br>";

function sum1(...$numbers): int|float
{
    return array_sum($numbers);
    // $sum1 = 0;

    // foreach ($numbers as $number) {
    //     $sum1 += $number;
    // }
}

echo sum1($i, $j, 100, 50, 8.9, 9);
echo "<br>";

function getValue()
{
    static $value = null;

    if ($value === null) {
        $value = someVeryExpensiveFunction();
    }

    return $value;
}

function someVeryExpensiveFunction()
{
    sleep(2);
    echo "Processing";
    return 10;
}

echo getValue() . "<br>";
echo getValue() . "<br>";
echo getValue() . "<br>";