<?php
require_once 'classes/Product.php';
require_once 'classes/Cart.php';

$product1 = new Product('Laptop', 1, 1000.00);
$product2 = new Product('Chocolate', 1, 12.90);
$product3 = new Product('Coffee', 3, 15.50);

$cart = new Cart();
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);

echo '<pre>';
print_r($cart);
print_r($cart->getTotalPrice());
echo '</pre>';

foreach ($cart->getProducts() as $product) {
    echo "{$product->getName()} <br>";
}
?>