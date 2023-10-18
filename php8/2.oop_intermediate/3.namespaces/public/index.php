<?php 

require_once '../Paddle/Transaction.php';
require_once '../Paddle/CustomerProfile.php';
require_once '../Stripe/Transaction.php';
require_once '../Notification/Email.php';

use namespaces\Paddle\{Transaction, CustomerProfile};
use namespaces\Stripe\Transaction as StripTransaction;

$paddleTransaction = new Transaction();
$paddleCustomerPorfile = new CustomerProfile();
$stripeTransaction = new StripTransaction();

var_dump($paddleTransaction, $stripeTransaction, $paddleCustomerPorfile);