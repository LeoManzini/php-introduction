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

    /**
     * Métodos auxiliares como esse manter na entidade. Em PHP (e em algumas abordagens mais orientadas a objetos como DDD — Domain-Driven Design),
     * é perfeitamente aceitável e até recomendado colocar esse tipo de lógica de domínio dentro da própria entidade.
     * 
     * Por que getTotalPrice() no Cart faz sentido em PHP (e DDD)?
     *     Coesão: O cálculo do total faz parte do conceito de um carrinho. Não faria sentido ele existir sem essa capacidade.
     *     Encapsulamento: A classe Cart já conhece os produtos, então ela é o lugar mais natural para saber como calcular o total.
     *     Evita services inchados: Separar tudo em Service pode levar a classes que fazem “tudo e nada ao mesmo tempo”.
     * Pensamento moderno: "Rich Domain Model"
     *     Em vez de ter entidades burras e services inteligentes, você cria entidades ricas, com comportamentos próprios. Isso torna seu código mais modular, testável e legível.
     *  Quando usar um CartService, então?
     *     Quando você precisa de operações complexas envolvendo múltiplos agregados (ex: Cart, Inventory, Discounts, Coupons, Shipping...).
     *     Quando há regras que envolvem acesso a repositórios, ou integração externa.
     *     Quando a lógica não pertence a um único objeto, mas a uma orquestração entre vários.
     */
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