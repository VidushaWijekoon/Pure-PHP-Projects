<?php

// cannot change once it define 
// cannot change in future or cannot override
// const and define (keyword)
// define runtime , const compli time

define("WEBSITE_NAME", "E-Commerce");
define("STATUS_PAID", "paid");

echo WEBSITE_NAME;
echo "<br>";
echo STATUS_PAID;
echo "<br>";

// check value assinged or not
echo defined('STATUS_PAID');
// this function returns boolean value
echo "<br>";

echo PHP_VERSION;
echo "<br>";

// Variable Variable
// use new assign value of the variable
$name = "bar";
$$name = "rab";
echo $name . " " . $$name;
echo "<br>";