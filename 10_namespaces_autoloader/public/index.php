<?php

// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';

// function autoloader($classname)
// {
//     if (file_exists($classname . ".php")) {
//         require_once   $classname . ".php";
//     } else {
//         echo   $classname . " not Found";
//     }
// }

// spl_autoload_functions(function ($class) {
//     $path = __DIR__ . '/' . lcfirst(str_replace('\\', '/', $class) . 'php');
//     require $path;
//     var_dump($path);
// });

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction(25, 'Transaction 1');

echo "<br>";
// var_dump($paddleTransaction);