<?php 

$currentTime = time();

echo $currentTime . "</br>";
echo $currentTime + 5 * 24 * 60 * 60 . "</br>";
echo $currentTime - 60 * 60 * 24 . "</br>";

echo date('m/d/y g:ia') . "</br>";
echo date('m/d/y g:ia', $currentTime + 5 * 24 * 60 * 60) . "</br>";
echo date('m/d/y g:ia', $currentTime - 60 * 60 * 24) . "</br>";

echo date_default_timezone_get() . "</br>";

echo date('m/d/y g:ia', mktime(0, 0, 0, 4, 10, null)) . "</br>";
echo date('m/d/y g:ia', strtotime('tomorrow')) . "</br>";
$newDate = date('m/d/y g:ia', strtotime('second friday of january')) . "</br>";

echo '<pre>';
print_r(date_parse($newDate));
echo '</pre>';