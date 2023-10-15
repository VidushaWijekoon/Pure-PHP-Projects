<?php 

// $dir = scandir(__DIR__);

// var_dump($dir);
// echo '<.br>';

// mkdir('files');
// rmdir('files');

// if(file_exists('file.txt')){
//     echo 'file has found';
// }else{
//     echo 'file not found';
// }

// mkdir('file');

$file = fopen('sample.txt', 'r');

if(file_exists('sample.txt')){
    echo 'file has found';
}else{
    echo 'file not found';
}

echo '</br>';

// while(($line = fgets($file)) !== false){
//     echo "{$line} </br>";
// }
// fclose($file);

while(($line = fgetcsv($file)) !== false){
    print_r($line);
}
fclose($file);

// delete file
// unline('sample.txt)