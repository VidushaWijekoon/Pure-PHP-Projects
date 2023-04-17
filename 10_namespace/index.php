<?php

require 'PaymentGateway/Paddle/Transaction.php';
require 'PaymentGateway/Paddle/CustomerProfile.php';
require 'PaymentGateway/Stripe/Transaction.php';

use PaymentGateway\Paddle\Transaction;

var_dump(new Transaction());