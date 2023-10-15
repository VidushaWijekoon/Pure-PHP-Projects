<?php 
declare(strict_types=1);

function foo(int $x, int $y): int{
    return $x* $y;
}

echo foo(2,3);
echo '</br>';

function num1(): int|float{
    return 23;
}

var_dump(num1());
echo '</br>';

function mixedNum(): mixed{
    return 23;
}

var_dump(mixedNum());
echo '</br>';

function sum(int|float $x, int|float $y, ...$numbers){
    return $x + $y + array_sum($numbers);
}

$numbers = [20, 30, 4, 5];
echo sum(...$numbers);
echo '</br>';

function php_8(int|float $x, int|float $y){
    if($x % $y === 0){
        return $x / $y;
    }
    return $x;
}

$x = 6;
$y = 6;

echo php_8(y: $y, x: $x);
echo '</br>';

function global_variable(){
    global $x;
    $x = 15; 
    return $x;
}

echo global_variable();

function getValue(){
    static $value = null;

    if($value === null){
        $value =someVeryExpensiveFunction();
    };
    // $value === null ? someVeryExpensiveFunction(): '';

    return $value;
}

function someVeryExpensiveFunction(){
    sleep(2);
    return 10;
}

echo getValue() . '</br>';
echo getValue() . '</br>';
echo getValue() . '</br>';

$anonymousFunc = function (int|float ...$numbers) use(&$x): int|float{
    $x = 15;
    echo $x;
    return array_sum($numbers);
};

echo $anonymousFunc(1, 2, 3, 4);

echo '</br>';
echo 'Arrow Function';
echo '</br>';

$array = [1, 2 ,3 ,4];

$array2 = array_map(fn($numbers) => $numbers * $numbers, $array);
echo '<pre>';
print_r($array2);
echo '</pre>';