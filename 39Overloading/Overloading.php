<?php

// > Overloading
// 1. Overloading adalah kemampuan secara dinamis membuat properties atau function.
// 2. Ini mirip meta programming di bahasa pemrograman lain seperi Ruby.
// 3. Namun ini beberda dengan function overloading di bahasa pemrogaraman lain seperti Java.
// 4. Overloading ini erat hubungannya dengan magic function yang sebelumnya sudah kita bahas.

// =================================================================================================

// > Properties Overloading
// 1. Saat kita mengakses properties, maka secara otomatis properties akan diakses.
// 2. Namun jika ternyata properties tsb tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan itu error.
// 3. PHP akan melakukan fallback ke magic function.
// 4. Dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic function tersebut.
// 5. Ada beberapa magic function yang bisa kita gunakan untuk properties overloading.

// > Magic Function untuk Properties Overloading
// 1. __set($name, $value): void
// Keterangan: Magic Function yang biasa digunakan untuk memberikan nilai pada suatu property tertentu.
// 2. __get($name): mixed
// Keterangan: Magic Function yang untuk mendapatkan nilai suatu property tertentu.
// 3. __isset($name): bool
// Keterangan: Magic Function yang digunakan untuk mengecek apakah suatu property sudah diset atau belum.
// 4. __unset($name): void
// Keterangan: Magic Function yang digunakan untuk melakukan unset pada suatu property.

// > Contoh Properties Overloading
// class Zero
// {
    // private array $properties = [];
    
    // Magic Function yang untuk mendapatkan nilai suatu property tertentu.
    // public function __get($name)
    // {
    //     return $this->properties[$name];
    // }

    // Magic Function yang biasa digunakan untuk memberikan nilai pada suatu property tertentu.
    // public function __set($name, $value): void
    // {
        // $this->properties[$name] = $value;
    // }
    
    // Magic Function yang digunakan untuk mengecek apakah suatu property sudah diset atau belum.
    // public function __isset($name)
    // {
        // return isset($this->properties[$name]);
    // }

    // Magic Function yang digunakan untuk melakukan unset pada suatu property.
    // public function __unset($name)
    // {
        // unset($this->properties[$name]);
    // }
// }

// $zero = new Zero();

// $zero->firstName = "Adrian";
// $zero->lastName = "Mulyawan";

// echo "Nama Depan : " . $zero->firstName . PHP_EOL;
// echo "Nama Belakang : " . $zero->lastName . PHP_EOL;
# Hasil :
# Nama Depan : Adrian
# Nama Belakang : Mulyawan

// echo "Isset : " . isset($zero->firstName) . PHP_EOL;
# Hasil : 
# Isset : 1


// echo "Unset : " . isset($zero->firstName) . PHP_EOL;
# Hasil : 
# Unset : 1

// echo "Nama Depan : " . $zero->firstName . PHP_EOL;
// echo "Nama Belakang : " . $zero->lastName . PHP_EOL;
# Hasil :
# Nama Depan : Adrian
# Nama Belakang : Mulyawan

// =================================================================================================

// > Function Overloading
// 1. Saat kita mengakses function, maka secara otomatis function akan diakses.
// 2. Namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan itu error.
// 3. PHP akan melakukan fallback ke magic function.
// 4. Dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic function tsb.
// 5. Ada beberapa magic function yang bisa kita gunakan untuk function overloading

// > Magic Function untuk Function Overloading
// 1. __call($name, $arguments): mixed
// Keterangan: Dieksekusi ketika memanggil function yang tidak tersedia
// 2. static __callStatic($name, $arguments): mixed
// Keterangan: Dieksekusi ketika memanggil static function yang tidak tersedia

// > Contoh Function Overloading
class Zero
{
    private array $properties = [];
    
    // Magic Function yang untuk mendapatkan nilai suatu property tertentu.
    public function __get($name)
    {
        return $this->properties[$name];
    }

    // Magic Function yang biasa digunakan untuk memberikan nilai pada suatu property tertentu.
    public function __set($name, $value): void
    {
        $this->properties[$name] = $value;
    }
    
    // Magic Function yang digunakan untuk mengecek apakah suatu property sudah diset atau belum.
    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    // Magic Function yang digunakan untuk melakukan unset pada suatu property.
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    // Magic Function yang digunakan ketika memanggil function yang tidak tersedia
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Function $name with arguments $join" . PHP_EOL;
    }

    // Magic Function yang digunakan ketika memanggil static function yang tidak tersedia
    static public function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Static Function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();

$zero->sayHello("Adrian", "Mulyawan");
# Didalam class zero() tidak memiliki function/method yang bernama sayHello(), tetapi di belakang layar PHP menjalankan magic function __call()
# Hasil: Call Function sayHello with arguments Adrian,Mulyawan

Zero::sayGoodbye("Goodbye");
# Didalam class zero() tidak memiliki function/method yang bernama "static public function sayGoodbye("Goodbye")", tetapi di belakang layar PHP menjalankan magic function __callStatic()
# Hasil: Call Static Function sayGoodbye with arguments Goodbye