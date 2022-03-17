<?php

require_once "data/Students.php";

use Data\Students\Student;

$student1 = new Student();
$student1->nim = "15523115";
$student1->name = "Adrian Mulyawan";
$student1->value = 100;
$student1->setSample("XXX");
var_dump($student1);
// Hasil:
// object(Data\Students\Student)#1 (3) {
//     ["nim"]=>
//     string(8) "15523115"
//     ["name"]=>
//     string(15) "Adrian Mulyawan"
//     ["value"]=>
//     int(100)
//     ["sample":"Data\Students\Student":private]=>
//     string(3) "XXX"
// }

// Cloning Object $student1 
// $student2 = clone $student1;
// var_dump($student2);
// Hasil:
// object(Data\Students\Student)#1 (3) {
//     ["nim"]=>
//     string(8) "15523115"
//     ["name"]=>
//     string(15) "Adrian Mulyawan"
//     ["value"]=>
//     int(100)
//     ["sample":"Data\Students\Student":private]=>
//     string(3) "XXX"
// }

// Menggunakan Function __clone()
$student2 = clone $student1;
var_dump($student2);
// Hasil
// object(Data\Students\Student)#2 (3) {
//     ["nim"]=>
//     string(8) "15523115"
//     ["name"]=>
//     string(15) "Adrian Mulyawan"
//     ["value"]=>
//     int(100)
//     ["sample":"Data\Students\Student":private]=>
//     uninitialized(string)
// }

# Kita coba set Samplenya
$student2->setSample('Wasyu');
var_dump($student2);
# Hasil
// object(Data\Students\Student)#2 (4) {          
//     ["nim"]=>                                    
//     string(8) "15523115"                         
//     ["name"]=>                                   
//     string(15) "Adrian Mulyawan"                 
//     ["value"]=>                                  
//     int(100)                                     
//     ["sample":"Data\Students\Student":private]=> 
//     string(5) "Wasyu"                            
// }                                              