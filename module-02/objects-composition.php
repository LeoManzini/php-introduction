<?php
require_once 'classes/Product.php';
require_once 'classes/Feature.php';

$product = new Product("iPhone 14", 10, 999.99);
$product->addFeature("Camera", "12MP");
$product->addFeature("Battery", "4000mAh");

echo "<pre>";
print_r($product);
echo "</pre>";

echo "Product: {$product->getName()}<br>";

foreach ($product->getFeatures() as $feature) {
    $featureName = $feature->getName();
    $featureValue = $feature->getValue();

    echo "Feature: {$featureName} = {$featureValue}<br>";
}
?>