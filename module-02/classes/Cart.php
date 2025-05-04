<?php
class Cart {
    private array $products = [];

    public function __construct() {
        // Constructor logic
    }

    public function addProduct(Product $product): void {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product): void {
        foreach ($this->products as $key => $value) {
            if ($value === $product) {
                unset($this->products[$key]);
            }
        }
    }

    public function getProducts(): array {
        return $this->products;
    }

    public function getTotalPrice(): float {
        $total = 0.0;
        foreach ($this->products as $product) {
            $priceTimesQuantity = $product->getPrice() * $product->getQuantity();
            $total += $priceTimesQuantity;
        }
        return $total;
    }

    public function clearCart(): void {
        $this->products = [];
    }
}
?>