<?php

// 1. Menggunakan Array
function getGenap(int $max): Iterator
{
    $array = [];

    for ($i = 1; $i <= $max; $i++) { 
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach(getGenap(100) as $value) {
    echo "Bilangan Genap = $value" . PHP_EOL;
}

// 2. Menggunakan Keyword "yield"
function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max ; $i++) { 
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGanjil(100) as $value) {
    echo "Bilangan Ganjil = $value" . PHP_EOL;
}

// 3. Merubah Dari Iterator Dari Materi Object Iteration
class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $forth = "Forth";

    public function getIterator(): Iterator
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
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