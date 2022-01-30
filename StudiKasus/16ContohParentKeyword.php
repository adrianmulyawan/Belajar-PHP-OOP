<?php 

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;
// Hasil: 0

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
// Hasil: 4
echo $rectangle->getParentCorner() . PHP_EOL;
// Hasil: 0