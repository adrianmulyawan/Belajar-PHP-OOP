<?php

namespace Data\Lecture;

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