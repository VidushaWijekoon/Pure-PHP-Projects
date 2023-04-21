<?php

require_once 'Transaction.php';

$transaction = new Transation(25);
$transaction->setAmount(125);
$transaction->process();