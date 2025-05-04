<?php
// Diz que classe atual é filha da classe referenciada
final class CheckingAccount extends Account {
    private float $limit;

    public function __construct($agency, $account, $balance, $limit) {
        parent::__construct($agency, $account, $balance);
        $this->limit = $limit;
    }

    public function getLimit(): float {
        return $this->limit;
    }

    public function withdraw(float $amount) {
        $totalBalance = $this->getBalance() + $this->limit;
        if ($totalBalance < $amount) {
            throw new Exception("Insufficient balance to withdraw");
        }
        
        $this->setBalance($this->getBalance() - $amount);
    }

    // public function deposit(float $amount) {
    //     if ($amount < 0) {
    //         throw new Exception("Can't deposit negative or zero");
    //     }
    //     $this->balance += $amount;
    // }
}
?>