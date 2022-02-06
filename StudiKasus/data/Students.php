<?php 

namespace Data\Students;

class Student
{
    public string $nim;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    // Membuat Function __clone()
    public function __clone()
    {
        // unset (hapus) properti yang tidak diinginkan
        unset($this->sample);
    }
}