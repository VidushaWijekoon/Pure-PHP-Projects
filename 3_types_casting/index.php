<?php

// casting change data type

# 4 Scalar Types
# bool -> true or false

// only accept int 
declare(strict_types=1);

$is_married = true;
echo gettype($is_married);
echo "<br>";
echo var_dump($is_married);
echo "<br>";

if ($is_married) {
    echo "married";
    echo "<br>";
} else {
    echo "not married";
    echo "<br>";
}
# int -> 1, 2, 5, -4 => without any decimal
$x = 10;
echo $x;
echo "<br>";
echo gettype($x);
echo "<br>";
echo var_dump($x);
echo "<br>";
# float -> 1.5, 3.68, -5.6 => with decimal
$y = 10.2;
echo $y;
echo "<br>";
# string -> characters
$full_name = "athapathtu wijekoon mudiyanselage vidusha pulashthi jayasri bandara wijekoon";
echo $full_name;
echo "<br>";
echo ucfirst($full_name);
echo "<br>";


# compound types
# array -> list of items
$my_list = [1, 2, 3, 4, 5, 'adidas', 'nike', 'puma', 2.2, 234.23, 224.123];
echo "<pre>";
print_r($my_list);
echo "</pre>";
# objects
# callable
# iterable

# special types
# null
# resource

function sum(int $a, int $b)
{
    return $a + $b;
}

echo sum(2, 2);
echo "<br>";

function sum1(string $c, int $d)
{
    var_dump($c);
    return $c + $d;
}

echo sum1(2, 2);
echo "<br>";