<?php
class ManufacturerProduct {
    private string $description;
    private float $price;
    private int $quantity;
    private Manufacturer $manufacturer;

    public function __construct(string $description, float $price, int $quantity, Manufacturer $manufacturer) {
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->manufacturer = $manufacturer;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function getManufacturer(): Manufacturer {
        return $this->manufacturer;
    }
}
?>