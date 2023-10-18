<?php

include './helper/helper.php';

// array chunk
$items1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$items2 = ['a' => 6, 'b' => 7, 'c' => 8, 'd' => 9, 'e' => 10];

// Array Chunk
show((array_chunk($items1, 2, true)));
echo '</br>';

$array1 = ['a', 'b', 'c'] ;
$array2 = [1, 2, 3];

// Combine two array
show(array_combine($array1, $array2));
echo '</br>';

// Array Filter
$array_numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
show(array_filter($array_numbers, fn($number, $key) => $number %2 == 0, ARRAY_FILTER_USE_BOTH));
echo '</br>';

// Array Sum
$array_numbers1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo array_sum($array_numbers1);

// Find array key
show(array_keys($array_numbers, 2));
echo '</br>';

// Array Map
$arrayMap = array_map(fn($num1, $num2) => $num1 * $num2, $items1, $items2);
show($arrayMap);
echo '</br>';

// Array Merge
$x = [1, 2, 3];
$y = [4, 5, 6];
$z = [7, 8, 9];
show(array_merge($x, $y, $z));
echo '</br>';

// Array Reducer
$invoiceItems = [
    ['price' => 9.99,   'qty'=> 3, 'desc' => 'Item 1'],
    ['price' => 29.99,  'qty'=> 1, 'desc' => 'Item 2'],
    ['price' => 149,    'qty'=> 1, 'desc' => 'Item 3'],
    ['price' => 14.99,  'qty'=> 2, 'desc' => 'Item 4'],
    ['price' => 4.99,   'qty'=> 4, 'desc' => 'Item 5'],
];

$total = array_reduce(
    $invoiceItems, 
    (fn($sum, $item) => $sum + $item['qty'] * $item['price'])
);

echo "Total {$total}";
echo '</br>';

// Search Array
$searchArray = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];
echo array_search('b', $searchArray);
echo '</br>';

// Find diffrence values in arrays
$a1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$a2 = ['f' => 3, 'g' => 4, 'h' => 5, 'i' => 7, 'j' => 8];
$a3 = ['k' => 3, 'l' => 4, 'm' => 10];

show(array_diff($a1, $a2, $a3));
show(array_diff_assoc($a1, $a2, $a3));
show(array_diff_key($a1, $a2, $a3));
 