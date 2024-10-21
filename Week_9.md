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
class Kendaraan {
    public $merk;
    public $kecepatanMaks;
    
    public function __construct($merk, $kecepatanMaks) {
        $this->merk = $merk;
        $this->kecepatanMaks = $kecepatanMaks;
    }
    
    public function infoKendaraan() {
        echo "Merk: " . $this->merk . ", Kecepatan Maks: " . $this->kecepatanMaks . " km/jam";
    }
}

// Class Turunan
class Mobil extends Kendaraan {
    public $jumlahPintu;
    
    public function __construct($merk, $kecepatanMaks, $jumlahPintu) {
        parent::__construct($merk, $kecepatanMaks);
        $this->jumlahPintu = $jumlahPintu;
    }
    
    public function parkir() {
        echo "Mobil " . $this->merk . " sedang parkir.";
    }
}

class SepedaMotor extends Kendaraan {
    public $tipeHandle;
    
    public function __construct($merk, $kecepatanMaks, $tipeHandle) {
        parent::__construct($merk, $kecepatanMaks);
        $this->tipeHandle = $tipeHandle;
    }
    
    public function staterMesin() {
        echo "Sepeda motor " . $this->merk . " dinyalakan.";
    }
}

// Membuat objek mobil
$mobil1 = new Mobil("Toyota", 180, 4);
$mobil1->infoKendaraan(); // Output: Merk: Toyota, Kecepatan Maks: 180 km/jam
$mobil1->parkir(); // Output: Mobil Toyota sedang parkir.

// Membuat objek sepeda motor
$motor1 = new SepedaMotor("Yamaha", 120, "Sport");
$motor1->infoKendaraan(); // Output: Merk: Yamaha, Kecepatan Maks: 120 km/jam
$motor1->staterMesin(); // Output: Sepeda motor Yamaha dinyalakan.
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


## Encapsulation (Enkapsulasi)

#### Encapsulation 
adalah konsep menyembunyikan detail implementasi dari sebuah objek dan hanya memperbolehkan akses melalui metode yang disediakan. Ini dilakukan dengan menggunakan visibility (aksesibilitas) seperti private, protected, dan public.

```php
class AkunBank {
    private $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function lihatSaldo() {
        return $this->saldo;
    }

    public function deposit($jumlah) {
        $this->saldo += $jumlah;
    }

    public function tarik($jumlah) {
        if ($jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
        } else {
            echo "Saldo tidak cukup!";
        }
    }
}

$akun1 = new AkunBank(1000000);
$akun1->deposit(500000);
echo $akun1->lihatSaldo(); // Output: 1500000
```

Contoh Lainnya :
```php
class Student {
    private $name;
    private $nim;
    private $grade;
    
    public function __construct($name, $nim) {
        $this->name = $name;
        $this->nim = $nim;
        $this->grade = null;
    }
    
    // Metode untuk mendapatkan nama mahasiswa
    public function getName() {
        return $this->name;
    }
    
    // Metode untuk mendapatkan NIM mahasiswa
    public function getNIM() {
        return $this->nim;
    }
    
    // Metode untuk mendapatkan nilai ujian
    public function getGrade() {
        return $this->grade;
    }
    
    // Metode untuk menetapkan nilai ujian dengan validasi
    public function setGrade($grade) {
        if ($grade >= 0 && $grade <= 100) {
            $this->grade = $grade;
            echo "Nilai berhasil disimpan.";
        } else {
            echo "Nilai tidak valid. Harus antara 0 dan 100.";
        }
    }
}

// Membuat objek Student
$student1 = new Student("Ahmad", "12345678");

// Mengatur nilai ujian
$student1->setGrade(85); // Output: Nilai berhasil disimpan.

// Mendapatkan informasi mahasiswa
echo $student1->getName(); // Output: Ahmad
echo $student1->getNIM(); // Output: 12345678
echo $student1->getGrade(); // Output: 85
```

## Polymorphism

#### Polymorphism 
adalah kemampuan untuk menggunakan metode yang sama dengan cara yang berbeda tergantung pada objeknya. Dalam PBO, polymorphism bisa dicapai melalui method overriding dan interfaces.

```php
// Class Induk
class Hewan {
    public function suara() {
        echo "Hewan mengeluarkan suara";
    }
}

// Class Turunan
class Anjing extends Hewan {
    public function suara() {
        echo "Anjing menggonggong";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Kucing mengeong";
    }
}

// Contoh Polymorphism
$hewan1 = new Anjing();
$hewan2 = new Kucing();

$hewan1->suara(); // Output: Anjing menggonggong
$hewan2->suara(); // Output: Kucing mengeong

```

Contoh Lainnya Manajer dan Karyawan :

```php
// Class Induk
class Pegawai {
    public function tugas() {
        echo "Pegawai melaksanakan tugas.";
    }
}

// Class Turunan
class Manajer extends Pegawai {
    public function tugas() {
        echo "Manajer mengelola tim.";
    }
}

class Karyawan extends Pegawai {
    public function tugas() {
        echo "Karyawan menyelesaikan pekerjaan harian.";
    }
}

// Fungsi untuk menampilkan tugas pegawai
function lihatTugas(Pegawai $pegawai) {
    $pegawai->tugas();
}

// Membuat objek dari class Manajer dan Karyawan
$manajer = new Manajer();
$karyawan = new Karyawan();

// Memanggil metode tugas dengan objek
lihatTugas($manajer);   // Output: Manajer mengelola tim.
lihatTugas($karyawan);  // Output: Karyawan menyelesaikan pekerjaan harian.
```