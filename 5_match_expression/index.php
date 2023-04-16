<?php
$payment_status = 2;

$payment_display = match ($payment_status) {
    1 => print 'Paid',
    2, 3 => print 'Payment Declint',
    0 => print 'Pending Payment',
};