<?php

declare(strict_types=1);

// Your Code
function getTransactionFiles(string $dirPath)
{
    $files = [];

    foreach (scandir($dirPath) as $file) {
        if (is_dir($file)) {
            continue;
        }
        $files[]  = $dirPath . $file;
    }
    return $files;
}

function getTransactions(string $filename, ?callable $trasactionHandler = null)
{
    if (!file_exists($filename)) {
        trigger_error('File "' . $filename . '" does not exists.', E_USER_ERROR);
    }
    $file = fopen($filename, 'r');
    // discart first line
    fgetcsv($file);
    $trasactions = [];

    // Read CSV File
    while (($trasaction = fgetcsv($file)) !== false) {
        if ($trasactionHandler !== null) {
            $transaction = $trasactionHandler($trasaction);
        }
        $trasactions[] = extractTransaction($trasaction);
    }

    return $trasactions;
}

function extractTransaction(array $transactionRow)
{
    // desctructring 
    [$data, $checkNumber, $description, $amount] = $transactionRow;

    $amount = (float) str_replace(['$', ','], '', $amount);

    return [
        'date' => $data,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount
    ];
}

function calculateTotals(array $transactions)
{
    $totals = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpenses' => 0];

    foreach ($transactions as $transaction) {
        $totals['netTotal'] += $transaction['amount'];
        if ($transaction['amount'] >= 0) {
            $totals['totalIncome'] += $transaction['amount'];
        } else {
            $totals['totalExpenses'] += $transaction['amount'];
        }
    }

    return $totals;
}
