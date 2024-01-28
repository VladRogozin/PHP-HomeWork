<?php
declare(strict_types=1);
define('APP_DIR', __DIR__ . '/');

require_once APP_DIR . 'BankAccount.php';


$account1 = new HW_8\BankAccount('123456789', '111', 1000.0);


echo "-1- Account ready: {$account1->getAccountNumber()}, Balance: {$account1->getBalance()}\n";
echo "-2-  \n";
$account1->deposit(500.0, '111');
echo "-3-  \n";
$account1->withdraw(1010.0, '111'); // Спроба зняття більше, ніж є на рахунку
echo "-4-  \n";
echo "Last balance: {$account1->getBalance()}\n";
