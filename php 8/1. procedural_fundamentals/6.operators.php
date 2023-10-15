<?php

/* PHP Oparators */

// Arithmetic Operators (+ - * / % **)

// Assignment Operators (= += -= *= /= %= **=)

// String Operators (. .=)
$name = 'Vidusha';
$name .= ' Wijekoon';
echo "My Name is {$name}";
echo "</br>";

// Comparison Operators (==  === != or <> !== < > <= >= <=>  ?? ?: )

// Error Control Operator (@)
// Error handling
$x = @file('txt.txt');

// Increment/ Decrement (++ --)

// Logical Operators (&& || ! and  or xor)

// Bitwise Operators (& | ^ ~ << >>)

// Array Operators (+ == === != <> !===)
$array1 = ['a'=> 1, 'b' => 2, 'c' => 3];
$array2 = ['d'=> 1, 'e' => 2, 'f' => 3];

$array3 = $array1 + $array2;
var_dump($array3);

// Execution Operator (``)

// Type Operator (instenceof)

// Nullsafe Operator (?)