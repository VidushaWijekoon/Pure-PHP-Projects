<?php 

$obj = new \stdClass();

$obj->a = 1;
$obj->b = 2;

// Json 

$str = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($str);

// Casting

$array = [1, 2, 3, 4, 5];
$obj1 = (object) $array;


var_dump($arr->Peter);
echo '</br>';
var_dump($obj);
echo '</br>';
var_dump($obj1);