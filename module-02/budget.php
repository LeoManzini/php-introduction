<?php
require_once "classes/Budget.php";
require_once "interfaces/Budgetable.php";
require_once "classes/Product.php";
require_once "classes/Services.php";

$budget = new Budget();
$budget->addProduct(new Product("Chocolate", 10, 299), 1);
$budget->addProduct(new Product("Coffee", 10, 170), 1);
$budget->addProduct(new Product("Eletric barber", 10, 7), 3);
$budget->addProduct(new Services(100, "Oil change"), 1);

print $budget->calculateTotal() . "<br>";
?>