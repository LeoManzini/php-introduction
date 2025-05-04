<?php
include 'classes/Manufacturer.php';
include 'classes/Product.php';

$manufacturer = new Manufacturer("Apple", "USA", "1234567890");
$product = new Product("iPhone 14", 10, 999.99);
// $product->setManufacturer(new Manufacturer("Apple", "USA", "1234567890"));
$product->setManufacturer($manufacturer);

echo "<pre>";
var_dump($product);
echo "<br>";
// Acessando o atributo nome do Manufacturer direto do get de produto
var_dump($product->getManufacturer()->getName());
echo "</pre>";
?>