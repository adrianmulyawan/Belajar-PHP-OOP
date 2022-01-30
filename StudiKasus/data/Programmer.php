<?php 

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
    if ($programmer instanceof BackendProgrammer) {
        echo "$programmer->name adalah seorang Backend Developer" . PHP_EOL;
    }elseif ($programmer instanceof FrontendProgrammer) {
        echo "$programmer->name adalah seorang Frontend Developer" . PHP_EOL;
    } else {
        echo "$programmer->name adalah seorang Fullstack Developer" . PHP_EOL;
    }
}