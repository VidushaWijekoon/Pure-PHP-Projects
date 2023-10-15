<?php

$programmingLangauage1 = array('PHP', 'JavaScript', 'Python');
print_r($programmingLangauage1);
echo '</br>';
echo '</br>';

// Recommended  
$programmingLangauage = ['PHP', 'JavaScript', 'Python'];
print_r($programmingLangauage);
echo '</br>';
echo $programmingLangauage[0];
echo '</br>';

$programmingLangauage[1] = 'C++';
echo '<pre>';
print_r($programmingLangauage);
echo '</pre>';
echo count($programmingLangauage);

echo '</br>';

// array push
array_push($programmingLangauage, 'Java', 'Kotlin');
$programmingLangauage[] = "C";
echo '<pre>';
print_r($programmingLangauage);
echo '</pre>';

echo '</br>';
// Keys
$programming = [
    'php' => '8.2',
    'python' => '3.9'
];

echo '<pre>';
$programming['go']= '1.15';
print_r($programming);
echo '</pre>';

echo $programming['php'];
echo '</br>';

// 
$programmingLangauage2 = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extention' => '.php',
        'website' => 'www.php.net',
        'openSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
        ],
    ],
    'python' => [
        'creator' => 'Guido van Rossum',
        'extention' => '.py',
        'website' => 'www.python.org',
        'openSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
        ],
    ],
];

echo '<pre>';
print_r($programmingLangauage2);
echo '</pre>';

echo $programmingLangauage2['php']['website'];
echo '</br>';
echo $programmingLangauage2['php']['versions'][0]['releaseDate'];

echo '</br>';

// array unset
$array = [1, 2, 3];
unset($array[0], $array[1], $array[2]);
$array[] = 4;
echo '<pre>';
print_r($array);
echo '</pre>';
echo array_key_exists(3, $array);
echo '</br>';
echo isset($array[3]);