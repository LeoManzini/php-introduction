<?php
class Budget {
    private array $items;

    // Acopla a classe produto em um orcamento
    // Mas a classe orçamento precisa somente de algo que forneca um preço
    public function addProduct(BudgetableInterface $budgetable, int $quantity) {
        $this->items[] = [$quantity, $budgetable];
    }

    public function calculateTotal(): float {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item[0] * $item[1]->getPrice();
        }
        return $total;
    }
}
?>