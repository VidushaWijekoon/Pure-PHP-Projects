<?php 

declare(strict_types=1);

function formatDollarAmount(float $amount): string{
    $isNagative = $amount < 0;
    
    return ($isNagative ? '-' : '' . '$' . number_format(abs($amount), 2));
}

function formatDate(string $date):string{
    return date('M j,Y', strtotime($date));
}