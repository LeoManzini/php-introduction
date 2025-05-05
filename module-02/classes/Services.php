<?php
class Services implements BudgetableInterface {
    private float $price;
    private string $description;

    public function __construct(float $price, string $description) {
        $this->price = $price;
        $this->description = $description;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getDescription(): string {
        return $this->description;
    }
}
?>