<?php

// Class Induk
class Kendaraan
{
  public $merk;

  public function __construct($merk)
  {
    $this->merk = $merk;
  }

  public function jalan()
  {
    echo $this->merk . " sedang berjalan.";
  }
}

// Class Turunan (mewarisi class Kendaraan)
class Mobil extends Kendaraan
{
  public $jumlahPintu;

  public function __construct($merk, $jumlahPintu)
  {
    parent::__construct($merk); // Memanggil constructor dari class parent
    $this->jumlahPintu = $jumlahPintu;
  }

  public function bukaPintu()
  {
    echo "Pintu mobil " . $this->merk . " telah dibuka.";
  }
}

$mobil1 = new Mobil("Toyota", 4);
$mobil1->jalan(); // Output: Toyota sedang berjalan.
$mobil1->bukaPintu(); // Output: Pintu mobil Toyota telah dibuka.