<?php

// error_reporting(E_ALL); // Show all errors
// error_reporting(E_ALL & ~E_WARNING); // Show all errors without warnings

// trigger_error('Example Error', E_USER_ERROR);
// trigger_error('Example Error', E_USER_WARNING);

// error_log();

function errorHandler(int $type, string $msg, ?string $file = null, ?int $line= null){
    echo "{$type} : {$msg} in {$file} on line {$line}";

    exit;
}

error_reporting(E_ALL & ~E_WARNING);
set_error_handler('errorHandler', E_ALL);

echo $x;