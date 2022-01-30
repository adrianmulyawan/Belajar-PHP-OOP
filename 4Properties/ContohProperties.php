<?php 

// > Properties 
// 1. Field / Properties / Attributes adalah data yang bisa kita sisipkan didalam Object
// 2. Namun sebelum kita bisa memasukan data di field, kita harus mendeklarasikan data apa saja yang dimiliki object tsb didalam deklarasi classnya
// 3. Membuat properties sama seperti membuat variable, namun ditempatkan didalam block class, namun diawali dengan kata kunci var

// > Kode Properties
class Person
{
    var $name;
    var $address;
    var $country;
}

// =================================================================================================

// > Manipulasi Properties
// 1. Properties yang ada di object, bisa kita manipulasi
// 2. Untuk memanipulasi data properti, sama seperti cara pada variable 
// 3. Untuk mengakses properties, kita butuh kata kunci "->" setelah nama object dan diikuti dengan nama propertiesnya 

// > Contoh Manipulasi Properties 
$person = new Person();
$person->name = "Adrian"; # Manipulasi Properties / Field
$person->address = "Jl Sui Raya Dalam Komp Taman Sui Raya"; # Manipulasi Properties / Field
$person->country = "Indonesia"; # Manipulasi Properties / Field

// =================================================================================================

// > Properties Type Declaration
// 1. Sama seperti di function, di properties juga kita bisa membuat type declaration
// 2. Ini membuat PHP otomatis mengecek tipe data yang sesaui dengan type declaration yang telah ditentukan
// 3. Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error 
// 4. Ingat, bahwa PHP memiliki fitur type juggling, yang secara otomatis bisa mengkonversi ke tipe data lain
// 5. Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties

// > Contoh Properties Type Declaration
// class Person
// {
//     var string $name;
//     var string $address;
//     var string $country;
// }

// =================================================================================================

// > Default Properties Value
// 1. Sama seperti variable, di properties kita juga bisa langsung mengisi valuenya
// 2. Ini mirip seperti default valuer, jadi jika tidak diubah di object, maka properties tsb akan memiliki value tsb

// > Contoh Defaulut Properties Value
// class Person
// {
//     var string $name;
//     var string $address;
//     var string $country = "Indonesia";
// }

// =================================================================================================

// > Nullable Propertis
// 1. Saat kita menambahkan type declaration di properties atau di method / function argument (parameter), maka secara otomatis kita tidak bisa mengirim data null ke dalam propertis / function argument tsb
// 2. Di PHP 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties / function arguments
// 3. Caranya sebelum type declarationya, kita bisa menambahkan tanda "?"
// class Person
// {
//     var string $name;
//     var ?string $address; (kita set agar nilainya bisa null)
//     var string $country = "Indonesia";
// }