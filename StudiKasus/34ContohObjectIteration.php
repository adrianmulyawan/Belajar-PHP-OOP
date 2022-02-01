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