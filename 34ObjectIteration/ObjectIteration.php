<?php 

// > Object Iteration
// 1. Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang terdapat di object tersebut menggunakan foreach
// 2. Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
// 3. Secara default, hanya properties yang public yang bisa diakses oleh foreach

// > Contoh Object Iterasi
// class Data
// {
    // var string $first = "First";
    // public string $second = "Second";
    // protected string $third = "Third";
    // private string $forth = "Forth";
// }

// $data = new Data();

// foreach ($data as $property => $value) {
    // echo "$property : $value" . PHP_EOL;
    // Hasil:
    // first : First
    // second : Second
// }

// Yang akan ditampilkan menggunakan perulangan "foreach" hanya properties yang visibilitynya "public"

// =================================================================================================

// > Iterator
// 1. Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
// 2. Jika kita ingin menangani hal ini secara manual, kita bisa menggunakan "Interface" bernama "Iterator"
// 3. Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat Iterator secara manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan "ArrayIterator", yaitu iterator yang menggunakan array sebagai data iterasi nya
// 4. Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface "IteratorAggregate", disana kita hanya butuh meng-override function "getIterator()" yang mengembalikan data/object Iterator salah satunya class turunanya "ArrayIterator()"

// > Contoh Iterator
# IteratorAggregate adalah interface bawaah dari PHP
class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $forth = "Forth";

    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];

        $iterator = new ArrayIterator($array);

        return $iterator;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
    // Hasil:
    // first : First
    // second : Second
    // third : Third
    // forth : Forth
}
# Ketika dijalankan perulangan foreach ini maka php akan secra otomatis memanggil function getIteraotr(). bila kita mengimplements "Interface: IteratorAggregate" maka php akan memanggil method/function getIterator nanti array yang dibalikan yang berada didalam function getIterator akan dibalikan kedalam perulangan foreach tsb