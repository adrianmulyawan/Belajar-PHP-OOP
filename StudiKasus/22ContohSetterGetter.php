<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

echo "Nama Category: " . $category->getName() . PHP_EOL;
echo "Apakah Mahal: " . $category->getExpensive() . PHP_EOL;