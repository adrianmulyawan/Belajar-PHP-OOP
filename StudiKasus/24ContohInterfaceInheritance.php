<?php 

require_once "data/Garage.php";

use Data\{HasBrand, IsMaintenance, IsClear, Car, Avanza};

$avanza = new Avanza();
$avanza->drive();
$avanza->getTire();
$avanza->getBrand();
$avanza->isMaintance();
$avanza->isClear();