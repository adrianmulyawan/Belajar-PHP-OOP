<?php

// > Compairing Object
// 1. Sama seperti tipe data yang lain, untuk membandingkan 2 buah object, kita bisa menggunakan operator (equals / ==) dan (identity / ===)
// 2. Operator Equals (==) membandingkan semua properties yang terdapat di object tsb, dan tiap properties juga akan dibandingkan menggunakan operator Equals (==)
// 3. Sedangkan operaot Identity (===), maka akan membandingkan apakah object identik, artinya mengacu ke object yang sama

// > Contoh Compairing Object
// $student1 = new Student();
// $student1->nim = "15523115";
// $student1->name = "Adrian Mulyawan";
// $student1->value = 100;

// $student2 = new Student();
// $student2->nim = "15521114";
// $student2->name = "Mandalika Ayusti Nawangsari";
// $student2->value = 100;

// > Hasil Equal
// var_dump($student1 == $student2);
// Hasilnya salah karena di perbandingan equal untuk property $name dan property $nim tiap object berbeda nilainya

// $student1 = new Student();
// $student1->nim = "15523115";
// $student1->name = "Adrian Mulyawan";
// $student1->value = 100;

// $student2 = new Student();
// $student2->nim = "15523115";
// $student2->name = "Adrian Mulyawan";
// $student2->value = 100;

// > Hasil Equals
// var_dump($student1 == $student2);
// Hasil True, karena setiap properti pada kedua object ini bernilai sama


// =================================================================================================
$student1 = new Student();
$student1->nim = "15523115";
$student1->name = "Adrian Mulyawan";
$student1->value = 100;

$student2 = new Student();
$student2->nim = "15523115";
$student2->name = "Adrian Mulyawan";
$student2->value = 100;


// > Hasil Identity
var_dump($student1 === $student2);
// Hasil False, walaupun propertinya sama tetapi objectnya berbeda. Jika didalam memori object $student1 dan $student2 berbeda tempat / lokasi. 

// Berdeda jika kita bandingkan antara object $student1 dan student1 pasti nilainya true karena berada didalam memori yang sama
var_dump($student1 === $student1);