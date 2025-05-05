<?php
// Assinatura de uma interface
interface BudgetableInterface {

    // Método que as classes que implementarem essa interface precisam
    public function getPrice(): float;
}
?>