<?php

// Implementasi Covariance
require_once "data/Food.php";
require_once "data/Pet.php";
require_once "data/AnimalShelter.php";

use Data\{AnimalShelter, CatShelter, DogShelter};
use Data\{Food, AnimalFood};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Franco");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Henry");
$dog->eat(new Food());