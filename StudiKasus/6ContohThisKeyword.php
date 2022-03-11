<?php 

require_once "data/Person.php";

$adrian = new Person();
$adrian->name = "Adrian";
$adrian->sayHello("Manda");

$manda = new Person();
$manda->name = "Mandalika";
$manda->sayHello(null);