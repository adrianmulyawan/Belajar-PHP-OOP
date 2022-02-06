<?php 

// > Object Iteration
// class Data
// {
//     var string $first = "First";
//     public string $second = "Second";
//     protected string $third = "Third";
//     private string $forth = "Forth";
// }

// $data = new Data();

// foreach ($data as $property => $value) {
//     echo "$property : $value" . PHP_EOL;
//     // Hasil:
//     // first : First
//     // second : Second
// }

// > Iterator
// IteratorAggregate adalah interface bawaah dari PHP
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
            "forth" => $this->forth
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
// Ketika dijalankan perulangan foreach ini maka php akan secra otomatis memanggil function getIteraotr(). bila kita mengimplements "Interface: IteratorAggregate" maka php akan memanggil method/function getIterator nanti array yang dibalikan yang berada didalam function getIterator akan dibalikan kedalam perulangan foreach tsb