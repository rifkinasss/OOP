<?php

// Class Induk
class Hewan
{
  public $nama;
  public $jenis;

  public function __construct($nama, $jenis)
  {
    $this->nama = $nama;
    $this->jenis = $jenis;
  }

  public function makan()
  {
    echo $this->nama . " sedang makan.";
  }
}

// Class Turunan
class Kucing extends Hewan
{
  public function bersuara()
  {
    echo $this->nama . " mengeong.";
  }
}

class Burung extends Hewan
{
  public function terbang()
  {
    echo $this->nama . " sedang terbang.";
  }
}

class Ikan extends Hewan
{
  public function berenang()
  {
    echo $this->nama . " sedang berenang.";
  }
}

// Membuat objek kucing
$kucing1 = new Kucing("Tom", "Kucing Persia");
$kucing1->makan(); // Output: Tom sedang makan.
$kucing1->bersuara(); // Output: Tom mengeong.

// Membuat objek burung
$burung1 = new Burung("Rio", "Burung Beo");
$burung1->terbang(); // Output: Rio sedang terbang.

// Membuat objek ikan
$ikan1 = new Ikan("Nemo", "Ikan Badut");
$ikan1->berenang(); // Output: Nemo sedang berenang.