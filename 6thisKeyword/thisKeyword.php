<?php 

// > this Keyword (this: objek saat ini)
// 1. Saat kita mmebuat kode didalam function didalam class, kita bisa menggunakan kata kunci "this" untuk mengakses object saat ini
// 2. Misal kadang kita butuh mangakses properties atau function lain di class yang sama

// > Contoh this Keyword
// class Person { 
//     var $name;
//     var $address;
//     var $country;

//     function sayHello(?string name) 
//     {
//         if (is_null($name)) {
               # {$this->name} mengacu dari properties $name object saat ini
//             echo "Hi, my name is {$this->name}" . PHP_EOL;
//         } else {
               # $name mengacu pada argument/parameter $name dari function tsb
               # $this->name mengacu dari object properties $name
//             echo "Helo $name, my name is {$this->name}" . PHP_EOL;
//         }
        
//     }
// }

// > Penerapannya
// $person1 = new Person();
// $person1->name = "Rudi";
// $person1->sayHello("Habibie");
// Hasil: Hello Habibie, my name is Rudi