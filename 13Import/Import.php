<?php 

// > use Keyword
// 1. Sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant di namespace kita perlu menyebutkan nama namespacenya di awal
// 2. Jika terlalu sering menggunakan class, function, atau constant yang sama, maka terlalu banyak duplikasi dngan menyebut namespace yang sama berkali-kali
// 3. Hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan menggunakan kata kunci "use"

// > Contoh use Keyword
// use Data\One\Conflict;
// use function Helper\helpMe;
// use const Helper\APPLICATION;

// $conflict1 = new Conflict();
// $conflict2 = new Conflict();

// helpMe();
// echo APPLICATION . PHP_EOL;

// =================================================================================================

// > Alias
// 1. Saat kita menggunakan user, artinya kita tidak perlu lagi menggunakan nama namespace diawal class ketika kita ingin membuat class tersebut menjadi sebuah object
// 2. Namun bagaimana jika kita ternyata nama classnya sama?
// 3. Untungnya PHP memiliki fitur yang namanya alias
// 4. Alias adalah kemampuan membuat nama lain dari class, function atau constant yang ada
// 5. kita bisa menggunakan kata kunci "as" setelah melakukan "use"

// > Contoh Alias
// use Data\One\Conflict as Conflict1;
// use Data\Two\Conflict as Conflict2;
// use function Helper\helpMe as help;
// use const Helper\APPLICATION as APP;

// $conflict1 = new Conflict1;
// $conflict2 = new Conflict2;

// help();
// echo APP . PHP_EOL;

// =================================================================================================

// > Group use Declaration
// 1. Kadang kita butuh melakukan import banyak hal di satu namespace yang sama
// 2. PHP memiliki fitur group use, dimana kita bisa import beberapa class, function atau constant dalam satu perintah use
// 3. Untuk melakukan itu, kita bisa menggunakan kurung "{}"

// > Contoh Group use Declaration
require_once "data/Conflict.php";
require_once "data/Helper.php";

// Memanggil class Conflict yang berada didalam namespace Data\One
use Data\One\{Conflict as Conflict1, Sample, Dummy};
// Memanggil class Conflict yang berada didalam namespace Data\Two
use Data\Two\{Conflict as Conflict2};
// Memanggil function helpMe() yang berada didalam namespace Helper
use function Helper\{helpMe as help};
// Memanggil const APPLICATION yamg berada didalam namespace Helper
use const Helper\{APPLICATION as APP};

// Membuat Object Conflict
$conflict1 = new Conflict1();

// Membuat Object Dummy
$dummy = new Dummy();

// Membuat Object Sample
$sampel = new Sample();

// Membuat Object Conflict dari Class Conflict namespace Data\Two
$conflict2 = new Conflict2();

// Memanggil function helpMe()
help();

// Memanggil const APPLICATION
echo APP . PHP_EOL;