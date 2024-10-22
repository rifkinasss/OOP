# Pemrograman Berorientasi Objek (PBO)

### Week 9 and 10

## Class dan Objek

#### Class 
Merupakan blueprint atau template dari objek. Class mendefinisikan atribut (data/properti) dan metode (fungsi) yang dimiliki oleh objek.

#### Objek 
Adalah instance dari sebuah class. Objek memiliki atribut dan dapat menjalankan metode yang didefinisikan di dalam class.

```php
// Membuat class bernama Mahasiswa
class Mahasiswa {
    public $nama;
    public $nim;
    
    // Constructor untuk menginisialisasi objek
    public function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }
    
    // Metode untuk menampilkan data mahasiswa
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . ", NIM: " . $this->nim;
    }
}

// Membuat objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Budi", "12345");
$mahasiswa1->tampilkanInfo(); // Output: Nama: Budi, NIM: 12345
```

Contoh Lainnya :
```php
// Class Induk
class Hewan {
    public $nama;
    public $jenis;
    
    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }
    
    public function makan() {
        echo $this->nama . " sedang makan.";
    }
}

// Class Turunan
class Kucing extends Hewan {
    public function bersuara() {
        echo $this->nama . " mengeong.";
    }
}

class Burung extends Hewan {
    public function terbang() {
        echo $this->nama . " sedang terbang.";
    }
}

class Ikan extends Hewan {
    public function berenang() {
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

```
## Inheritance (Pewarisan)

#### Inheritance 
memungkinkan sebuah class mewarisi properti dan metode dari class lain. Class yang mewarisi disebut subclass atau child class, sedangkan class yang diwarisi disebut superclass atau parent class.

```php
// Class Induk
class Kendaraan {
    public $merk;
    
    public function __construct($merk) {
        $this->merk = $merk;
    }
    
    public function jalan() {
        echo $this->merk . " sedang berjalan.";
    }
}

// Class Turunan (mewarisi class Kendaraan)
class Mobil extends Kendaraan {
    public $jumlahPintu;
    
    public function __construct($merk, $jumlahPintu) {
        parent::__construct($merk); // Memanggil constructor dari class parent
        $this->jumlahPintu = $jumlahPintu;
    }
    
    public function bukaPintu() {
        echo "Pintu mobil " . $this->merk . " telah dibuka.";
    }
}

$mobil1 = new Mobil("Toyota", 4);
$mobil1->jalan(); // Output: Toyota sedang berjalan.
$mobil1->bukaPintu(); // Output: Pintu mobil Toyota telah dibuka.
```

Contoh Lainnya E-Commerce dan Media Sosial :
```php
// Class Induk
class Aplikasi {
    public $nama;
    public $pengembang;
    
    public function __construct($nama, $pengembang) {
        $this->nama = $nama;
        $this->pengembang = $pengembang;
    }
    
    public function bukaAplikasi() {
        echo "Membuka aplikasi " . $this->nama;
    }
}

// Class Turunan
class ECommerceApp extends Aplikasi {
    public function beliProduk($produk) {
        echo "Membeli produk: " . $produk;
    }
}

class SocialMediaApp extends Aplikasi {
    public function unggahFoto($foto) {
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
```
