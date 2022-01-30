<?php

require_once "data/Product.php";

$product = new Product("Liquid Rasa Mie Goreng", 35000);

// echo $product->name;
// echo $product->price;
// Error karna visibility dari properties $name dan $price adalah privite cuma bisa diakses dari classnya saja

echo $product->getName() . PHP_EOL;
// Liquid Rasa Mie Goreng
echo $product->getPrice() . PHP_EOL;
// 35000
var_dump($product);

$dummy = new ProductDummy("Lele Rasa Saos Padang", 12000);
$dummy->info();
var_dump($dummy);