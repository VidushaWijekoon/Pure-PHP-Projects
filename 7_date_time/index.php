<?php

$current_time = time();

echo $current_time . "<br>";
echo $current_time + 5 * 24 * 60 * 60 . "<br>";

echo date('Y/M/d', $current_time) . "<br>";

$my_time = date_default_timezone_set('UTC');
echo $my_time . "<br>";

echo date('M-d-Y', strtotime('2021-01-18 07:10:55')) . "<br>";