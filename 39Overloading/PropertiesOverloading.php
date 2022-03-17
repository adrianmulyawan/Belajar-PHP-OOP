<?php

class Zero
{
    private array $properties = [];
    
    // Magic Function yang untuk mendapatkan nilai suatu property tertentu.
    public function __get($name)
    {
        echo "Access Property $name" . PHP_EOL;
        return "CONTOH";
    }

    // Magic Function yang biasa digunakan untuk memberikan nilai pada suatu property tertentu.
    public function __set($name, $value)
    {
        echo "Set propert $name with value $value" . PHP_EOL;
    }
    
    // Magic Function yang digunakan untuk mengecek apakah suatu property sudah diset atau belum.
    public function __isset($name)
    {
        echo "Isset $name" . PHP_EOL;
        return false;
    }

    // Magic Function yang digunakan untuk melakukan unset pada suatu property.
    public function __unset($name)
    {
        echo "Unset $name" . PHP_EOL;
    }
}

// =================================================================================================

// > Properties Overloading: __get()
// $zero = new Zero();

# Sebelum menggunakan magic function __get
// echo $zero->firstName . PHP_EOL;
# Hasil: Error, karena properties firstName tidak ada didalam class Zero()

# Setelah menggunakan magic function __get
// echo $zero->firstName . PHP_EOL;
# Hasil: 
# Access Property firstName
# CONTOH

// =================================================================================================

// > Properties Overloading: __set()
// $zero = new Zero();

# Sebelum menggunakan magic function __set()
// $zero->firstName = "Rachul";
# Tidak error, tapi datanya tidak tersimpan (percuma)

# Setelah menggunakan magic function __set()
// $zero->firstName = "Rachul";
# Hasil : Set property firstName with value Rachul

// =================================================================================================

// > Properties Overloading: isset()
// $zero = new Zero();

# Sebelum menggunakan magic function isset()
// isset($zero->firstName);
# Tidak error, tapi datanya tidak ditampilkan (percuma)

# Setelah menggunakan magic function isset()
// isset($zero->firstName);
# Hasil: Isset firstName

// =================================================================================================

// > Properties Overloading: unset()
$zero = new Zero();

# Sebelum menggunakan magic function unset()
// unset($zero->firstName);
# Tidak error, tapi datanya tidak ditampilkan (percuma)

# Setelah menggunakan magic function unset()
unset($zero->firstName);
# Hasil: Unser firstName