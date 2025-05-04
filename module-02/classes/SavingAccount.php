<?php
// Diz que classe atual é filha da classe referenciada
class SavingAccount extends Account {

    public function withdraw(float $amount) {
        if ($this->getBalance() < $amount) {
            throw new Exception("Insufficient balance to withdraw");
        }
        
        $this->setBalance($this->getBalance() - $amount);
    }
}
?>