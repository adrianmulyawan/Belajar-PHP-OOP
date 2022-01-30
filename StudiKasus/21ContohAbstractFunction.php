<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "joko";
$cat->run();

$dog = new Dog();
$dog->name = "Shiba Inu";
$dog->run();