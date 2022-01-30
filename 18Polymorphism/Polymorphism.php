<?php

// > Polymorphism
// 1. Polumorphism berasal dari bahasa Yunani yang berarti banyak bentuk.
// 2. Dalam OOP, Polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain (sebuh object menjadi bentuk object lainnya).
// 3. Polymorphism erat hubungannya dengan inheritance.

// > Contoh Polymorphism
// class Programmer
// {
    // public string $name;

    // public function __construct(string $name)
    // {
        // $this->name = $name;
    // }
// }

// class BackendProgrammer extends Programmer {}

// class FrontendProgrammer extends Programmer {}

// class Company
// {
    # Buat properties $programmer dengan type Programmer
    # parentnya class Programmer
    # Dengan ini "Programmer" kita bisa mengatur typenya berubah-ubah
    # Selaint itu kita tidak hanya bisa membuat object hanya Programmer saja melainkan kita bisa membuat object turunannya juga (BackendProgrammer dan FrontendProgrammer)
    // public Programmer $programmer;
// }

// $company = new Company();

# Dengan Polymorphism object kita bisa berubah-ubah seperti contoh berikut ini:
// $company->programmer = new Programmer("Adrian");
// var_dump($company);
// $company->programmer = new BackendProgrammer("Hakaman");
// var_dump($company);
// $company->programmer = new FrontendProgrammer("Irfan");
// var_dump($company);

// =================================================================================================

// > Function Argument Polymorphism
// Selain itu Polymorphism bisa digunakan di sebuah function argument dan selain itu kita bisa memasukan data programmer dan semua turunanya

// > Contoh Function Argument Polymorphism
class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer {}

class FrontendProgrammer extends Programmer {}

class Company
{
    // Buat properties $programmer dengan type Programmer
    // parentnya class Programmer
    // Dengan ini "Programmer" kita bisa mengatur typenya berubah-ubah
    // Selaint itu kita tidak hanya bisa membuat object hanya Programmer saja melainkan kita bisa membuat object turunannya juga (BackendProgrammer dan FrontendProgrammer)
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
    echo "Hello, nama saya $programmer->name" . PHP_EOL;
}

sayHelloProgrammer(new Programmer("Adrian"));
sayHelloProgrammer(new BackendProgrammer("Hakaman"));
sayHelloProgrammer(new FrontendProgrammer("Irfan"));
// Hasil:
// Hello, nama saya Adrian
// Hello, nama saya Hakaman
// Hello, nama saya Irfan