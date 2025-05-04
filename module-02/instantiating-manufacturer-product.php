<?php
include 'ManufacturerProduct.php';
include 'Manufacturer.php';

$manufacturer = new Manufacturer("Apple", "USA", "1234567890");
// $product = new ManufacturerProduct("iPhone 14", 999.99, 10, new Manufacturer("Apple", "USA", "1234567890"));
$product = new ManufacturerProduct("iPhone 14", 999.99, 10, $manufacturer);

echo "<pre>";
var_dump($product);
echo "<br>";
// Acessando o atributo nome do Manufacturer direto do get de produto
var_dump($product->getManufacturer()->getName());
echo "</pre>";
?>