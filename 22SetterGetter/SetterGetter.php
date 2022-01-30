<?php 

// > Encapsulation
// 1. Dalam OOP ada yang namanya "Encapsulation". Encapsulation artinya sebuha object tersembunyi dari akses luar
// 2. Hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid
// 3. Untuk mencapi ini, biasanya kita akan membuat semua properties menggunakan access modifier private, sehingga tidak bisa diakses atau diubah dari luar
// 4. Agar bisa diubah, kita akan meyediakan functuin untuk mengubah dan mendapatkan properties tsb.

// > Setter dan Getter
// 1. Di PHP, proses encapsulation sudah dibuat standarisasinya, dimana kita bisa mengugnakna Setter dan Getter method
// 2. Setter adalah function untuk mengubah data field
// 3. Getter adalah function untuk mengambil data field

// > Setter dan Getter Method
// 1. Tipe Data Boolean
// - Setter Method: set[NamaMethod](bool value)
// - Getter Method: is[NamaMethod]: bool

// 2. Tipe Data Lainnya
// - Setter Method: set[NamaMethod](tipeData value)
// - Getter Method: get[NamaMethod](): tipeData

// =================================================================================================

// > Contoh Kode Setter dan Getter
class Category
{
    private string $name;
    private bool $expensive;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }

    public function getExpensive(): bool
    {
        return $this->expensive;
    }
}

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

echo "Nama Category: " . $category->getName() . PHP_EOL;
echo "Apakah Mahal: " . $category->getExpensive() . PHP_EOL;