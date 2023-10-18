<?php

/* Loops in PHP */

// while loop

$i = 0;
while($i <= 15):
    if($i % 2 == 0){
        $i++;
        continue;
    }
    echo $i++ . ',';
endwhile;

// Do While Loop
echo '</br>';
// For Loop

// Foreach Loop 
// Widely using for Array and Objects

$programmingLangauage = ['PHP', 'JavaScript', 'Python'];
foreach($programmingLangauage as $key => $x){
    // echo $key . ':' , $x . '</br>';
    echo "{$key} : {$x} </br> ";
}

echo '</br>';

$programmingLangauage2 = [
     
    'creator' => 'Rasmus Lerdorf',
    'extention' => '.php',
    'website' => 'www.php.net',
    'openSource' => true,
    'versions' => [
        ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
        ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
    ],
     
];

foreach($programmingLangauage2 as $key => $value):
     echo "{$key} : ";
    if(is_array($value)){
        foreach($value as $skill){
            echo "{$skill} - ";
        }
    }else{
        echo $value;
    }
   echo "</br> ";
endforeach;