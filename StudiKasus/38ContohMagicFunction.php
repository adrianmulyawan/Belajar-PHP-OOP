<?php

require_once "data/Lecturer.php";

use Data\Lecture\Lecturer;

$adrian = new Lecturer();
$adrian->nip = "15523115";
$adrian->name = "Adrian Mulyawan";
$adrian->matkul = 3;
$adrian->setSample("Hello World!");

# Penggunaan Magic Function: __toString()
$string = (string) $adrian;
echo $string . PHP_EOL;
echo $adrian . PHP_EOL;
# Hasil:
# Lecuter ID: 15523115, Name: Adrian Mulyawan, Mengajar: 3 Mata Kuliah
# Lecuter ID: 15523115, Name: Adrian Mulyawan, Mengajar: 3 Mata Kuliah

// =================================================================================================

# Penggunaan Magic Function: __invoke()
$adrian(1, "Adrian", true);
# Hasil:
# Invoke Lecturer with arguments 1,Adrian,1

// =================================================================================================

# Menggunakan var_dump() tanpa Magic Function __debugInfo()
// var_dump($adrian);
# Hasil:
// object(Data\Lecture\Lecturer)#1 (3) {           
//     ["nip"]=>                                     
//     string(8) "15523115"                          
//     ["name"]=>                                    
//     string(15) "Adrian Mulyawan"                  
//     ["matkul"]=>                                  
//     int(3)                                        
//     ["sample":"Data\Lecture\Lecturer":private]=>  
//     uninitialized(string)                         
//   }              

# Menggunakan var_dump setelah Magic Function __debugInfo() dibuat
var_dump($adrian);
# Hasil
// object(Data\Lecture\Lecturer)#1 (5) {
//     ["nip"]=>
//     string(8) "15523115"
//     ["name"]=>
//     string(15) "Adrian Mulyawan"
//     ["matkul"]=>
//     int(3)
//     ["sample"]=>
//     string(12) "Hello World!"
//     ["author"]=>
//     string(15) "Adrian Mulyawan"
//   }