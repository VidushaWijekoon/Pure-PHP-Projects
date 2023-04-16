<?php

$dir = scandir(__DIR__);

var_dump($dir);
echo "<br>";
var_dump(is_file($dir[2]));
echo "<br>";
var_dump(is_dir($dir[2]));
echo "<br>";

// mkdir('foo');
// rmdir('foo');

$sample = fopen('sample.txt', 'r');

// $txt = "Mickey Mouse\n";
// fwrite($sample, $txt);
// $txt = "Vidusha Wijekoon \n";
// fwrite($sample, $txt);

if (file_exists('sample.txt')) {
    echo filesize('sample.txt');
    clearstatcache();
    echo filesize('sample.txt');
} else {
    echo "File not found";
}
echo "<br>";

while (($line = fgets($sample)) !== false) {
    echo $line . "<br>";
}

fclose($sample);
