<?php

// > Magic Function
// 1. Magic Function adalah function yang sudah ditentukan kegunaanya di PHP 
// 2. Kita tidak bisa membuat function tsb, kecuali memang sudah ditentukan kegunaannya
// 3. Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai constructor, __destruct sebagai destructor, dan __clone sebagai object cloning.
// 4. Masih banyak magic function lainnya, kita bisa melihatnya di link berikut:
// https://www.php.net/manual/en/language.oop5.magic.php

// > Magic Function: __toString()
// 1.) __toString() function merupakan salah satu magic function yang digunakan sebagai representasi string sebuah object
// 2.) Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()

// > Contoh Magic Function: __toString()
// class Lecturer 
// {
    // public string $nip;
    // public string $name;
    // public int $matkul;
    // public string $sample;

    // public function setSample(string $sample): void
    // {
        // $this->sample = $sample;
    // }

    // public function __clone()
    // {
        // unset($this->sample);
    // }

    // public function __toString(): string
    // {
        // return "Lecuter ID: {$this->nip}, Name: {$this->name}, Mengajar: {$this->matkul} Mata Kuliah";
    // }
// }

// $adrian = new Lecturer();
// $adrian->nip = "15523115";
// $adrian->name = "Adrian Mulyawan";
// $adrian->matkul = 3;

# Penggunaan Magic Function: __toString()
// $string = (string) $adrian;
// echo $string . PHP_EOL;
// echo $adrian . PHP_EOL;
# Hasil:
# Lecuter ID: 15523115, Name: Adrian Mulyawan, Mengajar: 3 Mata Kuliah
# Lecuter ID: 15523115, Name: Adrian Mulyawan, Mengajar: 3 Mata Kuliah

// =================================================================================================

// > Magic Function: __invoke()
// 1.) __invoke() merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai function
// 2.) Misal ketika kita membuat object $lectur, lalu kita melakukan $lecture(), maka secara otomatis function __invoke() yang akan dieksekusi 

// > Contoh Magic Function: __invoke()
// class Lecturer 
// {
    // public string $nip;
    // public string $name;
    // public int $matkul;
    // public string $sample;

    // public function setSample(string $sample): void
    // {
        // $this->sample = $sample;
    // }

    // public function __clone()
    // {
        // unset($this->sample);
    // }

    // public function __toString(): string
    // {
        // return "Lecuter ID: {$this->nip}, Name: {$this->name}, Mengajar: {$this->matkul} Mata Kuliah";
    // }

    // public function __invoke(...$arguments): void
    // {
        // $join = join(',', $arguments);
        // echo "Invoke Lecturer with arguments {$join}" . PHP_EOL;
    // }
// }

// $adrian(1, "Adrian", true);
# Hasil:
# Invoke Lecturer with arguments 1,Adrian,1

// =================================================================================================

// > Magic Function: __debugInfo()
// 1.) Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
// 2.) Function var_dump() sebenarnya memanggil function __debugInfo()
// 3.) Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()

// > Contoh Magic Function: __debugInfo()
class Lecturer 
{
    public string $nip;
    public string $name;
    public int $matkul;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "Lecuter ID: {$this->nip}, Name: {$this->name}, Mengajar: {$this->matkul} Mata Kuliah";
    }

    public function __invoke(...$arguments): void
    {
        $join = join(',', $arguments);
        echo "Invoke Lecturer with arguments {$join}" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            "nip" => $this->nip,
            "name" => $this->name,
            "matkul" => $this->matkul,
            "sample" => $this->sample,
            "author" => "Adrian Mulyawan"
        ];
    }
}

$adrian = new Lecturer();
$adrian->nip = "15523115";
$adrian->name = "Adrian Mulyawan";
$adrian->matkul = 3;
$adrian->setSample("Hello World!");

var_dump($adrian);
# Hasil
// object(Data\Lecture\Lecturer)#1 (5) {
//     ["nip"]=>
//     string(8) "15523115"
//     ["name"]=>
//     string(15) "Adrian Mulyawan"
//     ["matkul"]=>
//     int(3)
//     ["sample"]=>
//     string(12) "Hello World!"
//     ["author"]=>
//     string(15) "Adrian Mulyawan"
//   }