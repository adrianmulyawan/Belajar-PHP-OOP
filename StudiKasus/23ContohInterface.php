<?php 

require_once "data/Car.php";

use Data\{Avanza};

$avanza = new Avanza();
$avanza->drive();
$avanza->getTire();