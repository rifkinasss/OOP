<?php
// Class Induk
class Aplikasi
{
  public $nama;
  public $pengembang;

  public function __construct($nama, $pengembang)
  {
    $this->nama = $nama;
    $this->pengembang = $pengembang;
  }

  public function bukaAplikasi()
  {
    echo "Membuka aplikasi " . $this->nama;
  }
}

// Class Turunan
class ECommerceApp extends Aplikasi
{
  public function beliProduk($produk)
  {
    echo "Membeli produk: " . $produk;
  }
}

class SocialMediaApp extends Aplikasi
{
  public function unggahFoto($foto)
  {
    echo "Mengunggah foto: " . $foto;
  }
}

// Membuat objek dari class ECommerceApp
$shopee = new ECommerceApp("Shopee", "Sea Group");
$shopee->bukaAplikasi(); // Output: Membuka aplikasi Shopee
$shopee->beliProduk("Laptop"); // Output: Membeli produk: Laptop

// Membuat objek dari class SocialMediaApp
$instagram = new SocialMediaApp("Instagram", "Meta");
$instagram->bukaAplikasi(); // Output: Membuka aplikasi Instagram
$instagram->unggahFoto("Foto liburan"); // Output: Mengunggah foto: Foto liburan