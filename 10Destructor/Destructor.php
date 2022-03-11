<?php 

// > Destructor 
// 1. Jika cunstructor adalah function yang akan dipanggil ketika object dibuat
// 2. Destructor adalah function yang akan dipanggil ketika object dihapus dari memory
// 3. Biasanya ketika object tsb sudah tidak lagi digunakan, atau ketika aplikasi akan mati
// 4. Untuk membuat function destructor, kita bisa menggunakan nama function "__destruct()"
// 5. Khusus untuk destructor, kita tidak boleh menambahkan function argument
// 6. Dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menutup proses menulis ke file, sehingga tidak terjadi memory leak.

// > Contoh Kode Destructor
// class Person
// {
    // const AUTHOR = "Adrian Mulyawan";

    // var string $name;
    // var ?string $address;
    // var string $country = "Indonesia";

    # Constructor
    // function __construct(string $name, ?string $address)
    // {
        // $this->name = $name;
        // $this->address = $address;
    // }

    # Destructor
    // function __destruct()
    // {
        // echo "Object person {$this->name} is destroyed" . PHP_EOL;
    // }
// }