<?php

    $name = 'Harshani';

    echo 'Hello World';
    echo "</br>";
    echo 'vidusha', ' ' ,  'wijekoon';
    echo "</br>";
    echo 'joe\'s invoice';
    echo "</br>";
    echo $name;
    echo "</br>";
    
    $x = 1;
    $y = &$x;
    $x = 3;
    echo $y;
    echo "</br>";
    
    $firstName = 'vidusha';
    echo "My name is {$firstName}";
    echo "</br>";
    echo "name" . $firstName;
    echo "</br>";

    echo print 'Hello World';
?>

<h2><?= "Harshani Dissanayake" ?></h2>
<p><?= '<p>' . $x . '</p>' ?></p>