<?php

declare(strict_types=1);

// Scalar Types
    echo 'Scalar Types in PHP';
    echo '</br>';
    echo '</br>';
    
    //   - string (Sequence of characters)
    $string = 'vidusha wijekoon';
    echo "{$string} </br>";
    echo 'type of: ' . gettype($string) . '</br>';
    var_dump($string);

    //  - int (without decimal points)
    $number = 30;
    echo "{$number} </br>";
    echo 'type of: ' . gettype($number) . '</br>';
    var_dump($number);

    //  - float (With decimal points)
    $floatNum = 1.235;
    echo "{$floatNum} </br>";
    echo 'type of: ' . gettype($floatNum) . '</br>';
    var_dump($floatNum);
    
    //  - bool (True or False)
    $isMarried = true;
    echo "{$isMarried} </br>";
    echo 'type of: ' . gettype($isMarried) . '</br>';
    var_dump($isMarried);
    echo '</br>';
    
// Compound Types
    echo '</br>';
    echo 'Compound Types in PHP';
    echo '</br>';
    
    // array (Single varibale can hold multiple values)
    $companies = [1, 2, 3, 1.5, 3.5, true, 'vidusha'];
    var_dump($companies);
    echo '</br>';
    print_r($companies);
    
    // object
    // callable
    // iterable

// Special Types
    // null (Intentional absence of any object value) Suppose to be empty
    // resource



function sum(int $x, int $y){
    return $x + $y;
}
echo '</br>';
var_dump(sum(2,3));

echo '</br>';
// var_dump(sum(2,'3'));

// Casting
echo '</br>';
$x = (int)'5';
var_dump($x);

echo '</br>';
$d = (string) 5;
var_dump($d);

echo '</br>';