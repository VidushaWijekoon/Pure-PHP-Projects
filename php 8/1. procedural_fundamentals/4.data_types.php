<?php 
# Bool True or FALSE

// Falsy values

// 0 or -0
// 0.0 or -0.0
// ''
// '0'
// []
// null

$isComplete = false;

$isComplete ? print('success') : print('fail');
echo '</br>';
var_dump($isComplete);

// integer
$max_number = (int) PHP_INT_MAX;
$min_number = (integer) PHP_INT_MIN;
$lottery = 2_000_000;

echo '</br>';
echo $lottery;
echo '</br>';
var_dump($lottery);
echo '</br>';

//  float
echo '</br>';
// Don't compare directly float

// string

// Heredoc

$num1 = 1;
$num2 = 2;

$text = <<<TEXT
line 1 $num1
line 2 $num2
line 3
TEXT;
echo nl2br($text);

echo '</br>';
echo '</br>';

$text1 = <<<'TEXT'
line 1 $num1
line 2 $num2
line 3
TEXT;
echo nl2br($text1);

unset($text1);
var_dump($text1);