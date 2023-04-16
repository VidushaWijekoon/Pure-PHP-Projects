<?php

// arrays

$programming_languages = ['PHP', 'Java', 'JavaScript', 'MySql', 'Python'];
$programming_languages1 = array('PHP', 'Java', 'JavaScript', 'MySql', 'Python');

echo "<pre>";
print_r($programming_languages);
echo "<pre>";
echo "<pre>";
print_r($programming_languages1);
echo "<pre>";

echo $programming_languages[1];
echo "<br>";
echo end($programming_languages);
echo "<br>";

$programming_languages1[1] = "C++";
echo "<pre>";
print_r($programming_languages1);
echo "<pre>";

echo count($programming_languages);
echo "<br>";

$programming_languages1[] = "C++";
echo "<pre>";
print_r($programming_languages1);
echo "<pre>";

array_push($programming_languages, 'Go', 'C#');
echo "<pre>";
print_r($programming_languages);
echo "<pre>";

// array key
$programming_languages3 = [
    'php' => '8.2',
    'python' => '3.9'
];
$newLanguage = 'go';
$programming_languages3[$newLanguage] = '1.15';

echo "<pre>";
print_r($programming_languages3);
echo "<pre>";
echo $programming_languages3['php'];
echo "<br>";

$language = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extention' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => 'true',
        'version' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019']
        ],
    ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'extention' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => 'true',
        'version' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019']
        ],
    ],
];

echo "<pre>";
print_r($language);
echo "<pre>";

echo $language['php']['version'][0]['releaseDate'];

$arry = ['a', 'b', 50 => 'c', 'd', 'e'];
echo "<pre>";
print_r($arry);
echo "<pre>";