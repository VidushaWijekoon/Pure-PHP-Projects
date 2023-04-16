<?php

echo "Double Quotes" . "<br>";
echo ("Double Quotes") . "<br>";
echo 'Single Quotes' . "<br>";

// print return value 1
echo print "Vidusha Wijekoon ";
echo  "<br>";
$x = 1;
$y = &$x; // & reference to x

$x = 3;

echo $y;

echo  "<br>";

$firstname = "Vidusha";
echo "hello {$firstname}";