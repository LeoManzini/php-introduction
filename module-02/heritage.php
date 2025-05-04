<?php
require_once 'classes/Account.php';
require_once 'classes/SavingAccount.php';
require_once 'classes/CheckingAccount.php';

$savingAccount = new SavingAccount(1234, 5678, 15.50);

echo "Saldo conta poupança {$savingAccount->getBalance()} <br>";
$savingAccount->deposit(15.50);
echo "Saldo conta poupança {$savingAccount->getBalance()} <br>";
$savingAccount->withdraw(10);
echo "Saldo conta poupança {$savingAccount->getBalance()} <br>";
?>