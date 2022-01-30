<?php 

// > "parent" Keyword
// 1. Kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita override di class child.
// 2. Untuk mengakses function milik parent class, kita bisa menggunakan kata kunci "parent".
// 3. Sederhananya, keyword "parent" digunakan untuk mengakses class milik parent

// > Contoh "parent" Keyword
namespace Data;

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner()
    {
        return 4;
    }

    // Function ini merefrence function getCorner() milik parentnya (class Shape)
    public function getParentCorner()
    {
        // Karena disini kita mereturn function getCorner() milik parentnya
        return parent::getCorner();
    }
}

// > Mengakses function milik parent
$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;
// Hasil: 0

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
// Hasil: 4
echo $rectangle->getParentCorner() . PHP_EOL;
// Hasil: 0

// Pada saat kita menjalankan object $rectangle yang dimana kita mengakses method/function getParentCornet maka hasil yang ditampilkan adalah 0 karena dia merefrence function getCorner dari parentnya. Berbeda dengan $rectangle->getCorner() karena disini kita telah melakukan overriding pada function getCorner tsb