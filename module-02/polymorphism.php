<?php
require_once "classes/Account.php";
require_once "classes/SavingAccount.php";
require_once "classes/CheckingAccount.php";

$accounts = [];
$accounts[] = new CheckingAccount(1234, 5678, 100, 500);
$accounts[] = new SavingAccount(1234, 9101, 100);

foreach ($accounts as $account) {
    if (!$account instanceof Account) {
        throw new Exception("Array with different object than Accounts");
    }
    print $account->__toString() . '<br>';
    print "-- Saldo atual R$ {$account->getBalance()},00<br>";

    $account->deposit(200);
    print "-- Depósito de R$ 200,00 <br>";
    print "-- Saldo atual R$ {$account->getBalance()},00<br>";

    $account->withdraw(700);
    print "-- Saque de R$ 700,00 <br>";
}
?>