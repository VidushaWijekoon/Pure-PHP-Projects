<?php

require 'function.php';

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array1 = ['a', 'b', 'c'];
$array2 = [1, 2, 3];
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

show($items);
show(array_chunk($items, 2));
echo "<br> Array Combine";
show(array_combine($array1, $array2));

echo "<br> Filter array";
$even = array_filter($number, fn ($num) => $num % 2 === 0, ARRAY_FILTER_USE_BOTH);
show($even);

$dx = array_map(fn ($num) => $num * 3, $array2);
show($dx);