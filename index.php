<?php 
require_once 'Account.php';
require_once 'payingAcc.php';
require_once 'savingAcc.php';

// Create an instance of the Account class
$account = new Account(1000);
$account->deposit(500);
$account->withdraw(200);
echo $account; // Output: Code : 1 Balance : 1300 MAD
echo "\n\n";
// Create an instance of the PayingAcc class
$payingAccount = new PayingAcc(2000);
$payingAccount->deposit(1000);
$payingAccount->withdraw(500);
echo $payingAccount; // Output: Code : 2 Balance : 2495 MAD
echo $payingAccount->__toString(); 
