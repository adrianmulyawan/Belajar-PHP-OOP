<?php 

// > Constructor
// 1. Saat kita membuat Object, maka kita seperti memanggil sebuah function, karena kita menggunakan tanda kurung "()".
// Ex: $manda = new Person();
// 2. Didalam class PHP, kita bisa membuat constructor, constructor adalah function yang akan pertama kali dipanggil / dijalankan saat pertama kali Object dibuat
// 3. Mirip seperi di function, kita bisa memmberikan parameter/argument pada constructor
// 4. Nama constructor di PHP haruslah "__construct()"

// > Membuat Constructor
// class Person
// {
    // const AUTHOR = "Adrian Mulyawan";

    // var string $name;
    // var ?string $address;
    // var string $country = "Indonesia";

    // Constructor
    // public function __construct(string $name, ?string $address)
    // {
        // $this->name = $name;
        // $this->address = $address;
    // }
// }

// > Menjalankan Constructor
// Saat instansiasi object kita perlu menambahkan 2 paramter karena didalam function consturctor membutuhkan 2 parameter (nama, dan alamat)
$manda = new Person("Mandalika", "JL Sao Sao No 21");