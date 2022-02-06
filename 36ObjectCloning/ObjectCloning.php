<?php

// > Object Cloning
// 1. Kadang kita ada kebutuhan untuk menduplikasi sebuah object
// 2. Biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua properties di object awal ke object baru
// 3. Untungnya PHP mendukung object cloning
// 4. Kita bisa menggunakan perintah/keyword "clone" untuk membuat duplikasi dari sebuah object
// 5. Secara otomatis semua properties di object awal akan di duplikasi ke object baru

// > Contoh Object Cloning
// class Student
// {
    // public string $nim;
    // public string $name;
    // public int $value;
    // private string $sample;

    // public function setSample(string $sample): void
    // {
        // $this->sample = $sample;
    // }
// }

// $student1 = new Student();
// $student1->nim = "15523115";
// $student1->name = "Adrian Mulyawan";
// $student1->value = 100;
// $student1->setSample("XXX");
// var_dump($student1);
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

// =================================================================================================

// > __clone() Function
// 1. Kadang menyalin semua properties bukanlah yang kita inginkan
// 2. Misal saja kita hanya ingin menyalin beberapa properties saja, tidak semuanya
// 3. Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function didalam classnya dengan nama function __clone()
// 4. Function __clone akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
// 5. Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function "__clone()"

// > Contoh __clone Function
class Student
{
    public string $nim;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    // Membuat Function __clone()
    public function __clone()
    {
        // unset (hapus) properti yang tidak diinginkan
        unset($this->sample);
    }
}

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

// Clone Object $student1
$student2 = clone $student1;
var_dump($student2);
// Hasil
//   object(Data\Students\Student)#2 (3) {
//     ["nim"]=>
//     string(8) "15523115"
//     ["name"]=>
//     string(15) "Adrian Mulyawan"
//     ["value"]=>
//     int(100)
//     ["sample":"Data\Students\Student":private]=>
//     uninitialized(string)
//   }