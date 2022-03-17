<?php

namespace Data\Zeros;

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