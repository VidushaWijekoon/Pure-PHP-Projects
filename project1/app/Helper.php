<?php

declare(strict_types=1);

function formatDollarAmount(float $amount)
{
    $isNegative = $amount < 0;
    // Remove negative number and return only positve numbers
    return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2);
}

function formatData(string $date)
{
    return date('M j, Y', strtotime($date));
}
