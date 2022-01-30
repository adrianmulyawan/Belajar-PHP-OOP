<?php 

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Mandalika Ayusti";
echo "Manager Name: $manager->name" . PHP_EOL;
$manager->sayHello("Dhafia");

$vc = new VicePrecident();
$vc->name = "Adrian Mulyawan";
echo "Vice Precident Name: $vc->name" . PHP_EOL;
$vc->sayHello("Badrun");