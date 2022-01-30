<?php 

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location();
// $location->name = "Location Unknown";
// echo "$location->name" . PHP_EOL;
// Error: Tidak bisa instansiasi abstract class

$city = new City();
$city->name = "Pontianak";
echo "$city->name" . PHP_EOL;
// Hasil: Pontianak

$province = new Province();
$province->name = "Kalimantan Barat";
echo "$province->name" . PHP_EOL;
// Hasil: Pontianak

$country = new Country();
$country->name = "Indonesia";
echo "$country->name" . PHP_EOL;
// Hasil: Indonesia