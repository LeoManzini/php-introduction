<?php
/**
 * Classe marcada como abstrata, posso utilizar como classe pai, para criar filhos à partir dela
 * mas não posso instanciar essa classe diretamente em scripts
 *  */
abstract class Account {
    private int $agency;
    private int $account;
    private float $balance;

    public function __construct($agency, $account, $balance) {
        $this->agency = $agency;
        $this->account = $account;
        
        if ($balance > 0) {
            $this->balance = $balance;
        }
    }

    public function getAgency(): int {
        return $this->agency;
    }

    public function getAccount(): int {
        return $this->account;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    // Protected para ser acessado somente nas classes que extendem, mantendo o saldo seguro de operações
    protected function setBalance(float $balance) {
        $this->balance = $balance;
    }

    // Para classes mudarem o saldo fora das classes filhas, foi criado um método de depósito com regras e validações
    final public function deposit(float $amount) {
        if ($amount < 0) {
            throw new Exception("Can't deposit negative or zero");
        }
        $this->balance += $amount;
    }

    abstract function withdraw(float $amount);

    public function __toString(): string {
        return "Agência: {$this->agency}, Nº da conta: {$this->account}";
    }
}
?>