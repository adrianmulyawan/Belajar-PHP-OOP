<?php 

class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return "Nama Produk: $this->name";
    }

    public function getPrice()
    {
        return "Harga Produk: $this->price";
    }
}

class ProductDummy extends Product
{
    // Tidak bisa mengakses juga karena properties visibility = private
    // Agar dapat diakses kita dapat mengubah visibility properties menjadi = protected
    public function info()
    {
        echo "Name: $this->name" . PHP_EOL; 
        echo "Price: $this->price" . PHP_EOL; 
    }
}