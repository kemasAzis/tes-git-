<?php

// 1. CLASS (Cetak Biru)
// Class berfungsi sebagai wadah untuk menyimpan data (properti) dan fungsi (method)
// yang saling berhubungan dalam satu kesatuan.
class Mobil {
    // Properti (Data / Ciri-ciri)
    // Berfungsi untuk menyimpan informasi tentang objek
    public $merk;
    public $warna;
    public $tahun;

    // Method (Fungsi / Perilaku)
    // Berfungsi untuk mendefinisikan apa yang bisa dilakukan oleh objek
    public function nyalakanMesin() {
        return "Mesin mobil " . $this->merk . " dihidupkan. Vroom vroom!";
    }

    public function infoMobil() {
        return "Ini adalah mobil " . $this->merk . " berwarna " . $this->warna . " keluaran tahun " . $this->tahun . ".";
    }
}

// 2. OBJECT (Wujud Nyata)
// Object berfungsi untuk merepresentasikan data nyata di dalam program kita.
// Kita bisa membuat banyak object dari satu class yang sama.

// Membuat object pertama
$mobilPertama = new Mobil();
$mobilPertama->merk = "Toyota Avanza";
$mobilPertama->warna = "Hitam";
$mobilPertama->tahun = 2023;

// Membuat object kedua
$mobilKedua = new Mobil();
$mobilKedua->merk = "Honda Civic";
$mobilKedua->warna = "Putih";
$mobilKedua->tahun = 2024;

// Memanggil method pada object
echo $mobilPertama->infoMobil() . "<br>";
echo $mobilPertama->nyalakanMesin() . "<br><br>";

echo $mobilKedua->infoMobil() . "<br>";
echo $mobilKedua->nyalakanMesin();

?>