<?php

declare(strict_types = 1);

// Your Code
function getTransactionFiles(string $dirPath): array{
    $files = [];

    foreach(scandir($dirPath)as $file){
        if(is_dir($file)){
            continue;
        }

        $files[] = $dirPath . $file;
    }

    return $files;
}

// Read File 

function getTransactions(string $filename, ?callable $transactionHandler = null):array{
    
    if(! file_exists($filename)){
        trigger_error('File "' . $filename . '" does not exist.', E_USER_ERROR);
    }

    $file = fopen($filename, 'r');
    // Remove the first line
    fgetcsv($file);
    $transactions = [];

    // Read Line by Line
    while(($transaction = fgetcsv($file)) !== false){
        if($transactionHandler !== null){
            $transaction = $transactionHandler($transaction);
        }
        $transactions[] = extractTransaction($transaction);
    }

    return $transactions;
}

function extractTransaction(array $transactionRow): array{
    
    // array destructor
    [$date, $checkNumber, $description, $amount] = $transactionRow;

    // Remove , and $
    $amount = (float)str_replace(['$', ','], '', $amount);

    return [
        'date'          => $date,
        'checkNumber'   => $checkNumber,
        'description'   => $description,          
        'amount'        => $amount,
    ];
}

function calculateTotals(array $transactions):array{
    $totals = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpenses' => 0];

    foreach($transactions as $transaction){
        $totals['netTotal'] += $transaction['amount'];
        
        if($transaction['amount'] >= 0){
            $totals['totalIncome'] += $transaction['amount'];
        }else{
            $totals['totalExpenses'] += $transaction['amount'];
        }
    }

    return $totals;
}