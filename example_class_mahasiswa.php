<?php

class Mahasiswa
{
    public $nama;
    public $nim;

    public function __construct($nama, $nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function tampilkanInfo()
    {
        echo "Nama: " . $this->nama . ", NIM: " . $this->nim;
    }
}

$mahasiswa1 = new Mahasiswa("Budi", "12345");
$mahasiswa1->tampilkanInfo();
