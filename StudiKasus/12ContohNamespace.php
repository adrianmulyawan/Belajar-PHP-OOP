<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Membuat Object Jika Class Berada Didalam Namespace
$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

// Mengakses Function atau Variabel Constant di Namespace
\Helper\helpMe();
echo \Helper\APPLICATION;